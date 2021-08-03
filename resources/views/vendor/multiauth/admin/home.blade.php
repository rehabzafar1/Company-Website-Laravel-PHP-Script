@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Employees</p>
                            <h3 class="card-title">{{$employees}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-warning">person</i> <a href="">Employees In Record</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="rose">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Emails</p>
                            <h3 class="card-title">{{ $emails }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">email</i> Total Emails In Record
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Jobs</p>
                            <h3 class="card-title">{{ $jobs }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-success">date_range</i> Latest Total Jobs Available
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Total Services</p>
                            <h3 class="card-title">{{ $services }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-info">update</i> Total Services
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
