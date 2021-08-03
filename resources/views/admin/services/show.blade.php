@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a type="submit" class="btn btn-success" href="{{ route('admin.service.index') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Back
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="">
                                <img class="img" src="{{ url('storage/images/services/'.$service->icon) }}" style="object-fit: contain;width: unset;height: 130px" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-gray">{{ $service->name }}</h6>
                            <p class="description">{{ $service->description }}</p>
                            <a href="{{ route('admin.service.index') }}" class="btn btn-rose btn-round">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
