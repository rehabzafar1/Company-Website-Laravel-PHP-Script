@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a type="submit" class="btn btn-success" href="{{ route('admin.jobs.index') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Back
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">mail_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Stacked Form</h4>
                            <form method="POST" action="{{ route('admin.jobs.store') }}">
                                @csrf
                                <div class="col-md-6">
                                    <select class="selectpicker" data-style="select-with-transition" title="Choose Category" data-size="10" name="category">
                                        <option disabled> Choose Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Description</label>
                                        <input type="text" class="form-control" name="description">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Experience</label>
                                        <input type="text" class="form-control" name="experience">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <select class="selectpicker" data-style="select-with-transition" title="Choose Type" data-size="10" name="type">
                                        <option disabled> Choose Type</option>
                                        <option>Full time</option>
                                        <option>Part time</option>
                                        <option>Remote</option>
                                    </select>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" name="expiry" placeholder="Expiry Date"/>
                                    </div>
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

@push('scripts')
    <script>
        $(document).ready(function(){
            demo.initFormExtendedDatetimepickers();
            format: 'yy/mm/dd';
        });
    </script>
    @endpush
