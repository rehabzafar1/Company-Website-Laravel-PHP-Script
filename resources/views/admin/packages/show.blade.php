@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="">
                                <img class="img" src="{{ url('storage/images/icons/'.$package->icon) }}" style="object-fit: contain;width: unset;height: 130px" />
                            </a>
                        </div>

                        <div class="card-content">
                            <h6 class="category text-gray">{{ $package->name }}</h6>
                            <h4 class="card-title">{{ $package->price }}</h4>
                            <a href="{{ route('admin.package.index') }}" class="btn btn-rose btn-round">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
