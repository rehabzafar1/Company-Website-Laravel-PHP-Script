@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Email Address</p>
                            <h3 class="card-title">...</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a>{{ $employee->email }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">stay_current_portrait</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Phone Number</p>
                            <h3 class="card-title">...</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a>{{ $employee->phone }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="purple">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Linkdein </p>
                            <h3 class="card-title">...</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a>{{ $employee->linkedin }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Facebook </p>
                            <h3 class="card-title">...</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <a>{{ $employee->facebook }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="">
                                <img class="img" src="{{ url('storage/images/'.$employee->image) }}" style="object-fit: contain;width: unset;height: 130px" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-gray">{{ $employee->designation }}</h6>
                            <h4 class="card-title">{{ $employee->name }}</h4>
                            <p class="description">{{ $employee->description }}</p>
                            <a href="{{ route('admin.employee.index') }}" class="btn btn-rose btn-round">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
