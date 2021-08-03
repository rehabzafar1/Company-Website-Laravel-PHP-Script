@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>ALL Packages</h3>
                </div>
                <div class="col-md-6">

                    <a class="btn btn-success pull-right" href="{{ route('admin.package.create') }}">
                <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Add Package
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($packages as $package)
                    <div class="col-md-3">
                        <div class="card card-pricing card-raised">
                            <div class="card-content">
                                <h6 class="category"> {{ $package->name }}</h6>
                                <div class="icon icon-rose">
                                    <img class="img" src="{{ url('storage/images/icons/'.$package->icon) }}" style="width: 40px" />
                                </div>
                                <ul>
                                    @foreach($package->options as $option)
                                        <li>{{ $option->name }}</li>
                                    @endforeach
                                </ul>
                                <h3 class="card-title">{{ $package->price }}</h3>
                                <div class="card-td-actions text-right" style="position: relative;bottom: -15px;top: unset">
                                    <form action="{{ route('admin.package.destroy',$package->id) }}" method="POST">
                                        <div class="text-center" style="position: absolute;top:-26px;left: 21%">
                                        <a type="submit" href="{{ route('admin.package.show',$package->id) }}" rel="tooltip" class="btn btn-info" data-placement="bottom" data-original-title="show" title="" style="padding: 7px">
                                            <i class="material-icons">person</i>
                                        </a>
                                        <a type="submit" href="{{ route('admin.package.edit',$package->id) }}" rel="tooltip" class="btn btn-success" data-placement="bottom" data-original-title="edit" title="" style="padding: 7px">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="{{ route('admin.package.edit',$package->id) }}" rel="tooltip" class="btn btn-danger" data-placement="bottom" data-original-title="delete" title="" style="padding: 7px">
                                            <i class="material-icons">close</i>
                                        </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

