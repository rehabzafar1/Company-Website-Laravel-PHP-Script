@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">mail_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Stacked Form</h4>
                            <form method="POST" action="{{ route('admin.jobs.update',$job->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <select class="selectpicker" data-style="select-with-transition" title="Choose Category" data-size="10" name="category">
                                        <option disabled> Choose Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $job->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $job->name }}">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{ $job->description }}">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Experience</label>
                                        <input type="text" class="form-control" name="experience" value="{{ $job->experience }}">
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
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ $job->location }}">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" name="expiry" placeholder="Expiry Date" value="{{ $job->expiry }}"/>
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
