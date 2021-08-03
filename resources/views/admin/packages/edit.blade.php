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
                            <h4 class="card-title">Edit Package</h4>
                            <form action="{{ route('admin.package.update',$package->id) }}" method="POST" enctype="multipart/form-data">
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
										<input type="file" name="icon" value="{{ $package->icon }}">
                                    </span>
                                                <br>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" name="name" value="{{ $package->name }}" required>
                                    <span class="material-input"></span>
                                </div>

                                <select class="selectpicker" name="optionsCheckboxes[]" data-style="select-with-transition" multiple title="Choose Options" data-size="7" >
                                    <option disabled> Choose Options</option>
                                    @foreach($options as $option)
                                        <option name="optionsCheckboxes[]" value="{{ $option->id }}"
                                           @if (in_array($option->name, $packageOptions))
                                           selected
                                            @endif >{{ $option->name }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input type="text" class="form-control" name="price" value="{{ $package->price }}" required>
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



