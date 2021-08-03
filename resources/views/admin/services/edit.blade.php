@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <form action="{{ route('admin.service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header card-header-icon" data-background-color="rose">
                                <i class="material-icons">mail_outline</i>
                            </div>
                            <div class="card-content">
                                <h4 class="card-title">Add Services</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail img-circle">
                                                <img src="{{ asset('backend/assets/img/placeholder.jpg') }}" alt="..." style="width: 90px;height: 90px">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                            <div>
									<span class="btn btn-round btn-rose btn-file">
										<span class="fileinput-new">Add Icon</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="icon" value="{{ $service->icon }}">
                                    </span>
                                                <br>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ asset('backend/assets/img/image_placeholder.jpg') }}" alt="..." style="height: 89px">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
									<span class="btn btn-rose btn-round btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="image" value="{{ $service->image }}" />
									</span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <input class="form-control" name="name" type="text" value="{{ $service->name }}" required="true"/>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">Description</label>
                                    <input class="form-control" name="description" value="{{ $service->description }}"  type="text" required="true" />
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-rose btn-fill">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
