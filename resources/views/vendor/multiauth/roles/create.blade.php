@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header text-center">Add New Role</div>

                        <div class="card-body" style="padding: 15px">
                            @include('multiauth::message')
                            <form action="{{ route('admin.role.store') }}" method="post">
                                @csrf
                                <div class="form-group label-floating is-empty text-center">
                                    <label for="control-label">Role Name</label>
                                    <input type="text" placeholder="Give an awesome name for role" name="name" class="form-control" id="role" required />
                                </div>
                                <div class="form-group" style="margin-top: 20px">
                                    <label for="role">Assign Permissions</label>
                                        @foreach($permissions as $key => $value)
                                            <h3 class="text-center text-success font-weight-bold text-uppercase">{{$key}}</h3>
                                            <div class="d-flex justify-content-between">
                                                @foreach($value as $permission)
                                                    <div class="checkbox checkbox-inline">
                                                        <label for="{{$permission->id}}">{{$permission->name}}
                                                        <input type="checkbox" name="permissions[]"
                                                               value="{{$permission->id}}" id="{{$permission->id}}">
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-sm">Store</button>
                                <a href="{{ route('admin.roles') }}" class="btn btn-sm btn-danger">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
