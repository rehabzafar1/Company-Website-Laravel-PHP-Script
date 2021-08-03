@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Edit Package List</h4>
                            <form action="{{ route('admin.package-option.update',$options->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $options->name }}"  required>
                                        <span class="material-input"></span>
                                        <p id="errquantity" class="em no-margin text-danger"></p>
                                    </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



