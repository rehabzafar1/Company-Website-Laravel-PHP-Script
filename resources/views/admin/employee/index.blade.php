@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h3>ALL EMPLOYEES</h3>
                </div>
                <div class="col-md-6">

                    <a class="btn btn-success pull-right" href="{{ route('admin.employee.create') }}">
                <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Add Employee
                    </a>
                </div>
            </div>

            <div class="row">
                @foreach($employees as $employee)
                    <div class="col-md-4">
                        <div class="card card-product" data-count="5">
                            <div class="card-image" data-header-animation="true">
                                <a href="#pablo">
                                    <img class="img" src="{{ url('storage/images/'.$employee->image) }}">
                                </a>
                            </div>

                            <div class="card-content">
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                        <i class="material-icons">build</i> Fix Header!
                                    </button>
                                    <form action="{{ route('admin.employee.destroy',$employee->id) }}" method="POST">

                                        <a type="submit" href="{{ route('admin.employee.show',$employee->id) }}" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                                            <i class="material-icons">art_track</i>
                                        </a>
                                        <a type="submit" href="{{ route('admin.employee.edit',$employee->id) }}" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="{{ route('admin.employee.edit',$employee->id) }}" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="" data-original-title="Remove">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </form>
                                </div>

                                <h4 class="card-title">
                                    <a href="#pablo">{{ $employee->name }}</a>
                                </h4>
                                <div class="card-description">{{ $employee->description }}</div>
                            </div>
                            <div class="card-footer">
                                <div class="price">
                                    <h4>{{ $employee->designation }}</h4>
                                </div>
                                <div class="stats pull-right">
                                    <p class="category"><i class="material-icons">settings_phone</i> {{ $employee->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

