@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-success" href="{{ route('admin.employee.index') }}">
                    <span class="btn-label">
                    <i class="material-icons">undo</i>
                </span>
                    Undo
                </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">person</i>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">Edit Employee</h4>
                            <form action="{{ route('admin.employee.update',$employee->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-circle">
                                                <img src="{{ asset('backend/assets/img/placeholder.jpg') }}" alt="..." style="width: 90px;height: 90px">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                            <div>
									<span class="btn btn-round btn-rose btn-file">
										<span class="fileinput-new">Add Photo</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="image" value="{{ $employee->image }}">
                                    </span>
                                                <br>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $employee->name }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" value="{{ $employee->designation }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $employee->email }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Phone</label>
                                    <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $employee->facebook }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="{{ $employee->linkedin }}" required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <input type="text"  class="form-control" name="description" value="{{ $employee->description }}"  required>
                                    <span class="material-input"></span>
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



