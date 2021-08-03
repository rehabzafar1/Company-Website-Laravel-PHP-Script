@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h3>DETAIL</h3>
            </div>
            <div class="col-md-6">

                <a class="btn btn-success pull-right" href="{{ route('admin.jobs.index') }}">
                <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                    Back
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card" data-count="1">
                    <div class="card-header card-header-text" data-background-color="rose">
                        <h4 class="card-title">{{ $job->name }}</h4>
                        <p class="category">{{ $job->category->name }}</p>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a>{{ $job->experience }}</a>
                        </h4>
                        <div class="card-description">
                            {{ $job->description }}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>{{ $job->type }}</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i>{{ $job->location }}</p>
                        </div>
                        <p class="text-center stats category"><i class="material-icons" style="margin-right: 5px">calendar_today</i>{{ $job->expiry }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
