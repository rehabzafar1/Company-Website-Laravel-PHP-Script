@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a type="submit" class="btn btn-success" href="{{ route('admin.service.create') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Add New Service
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header card-header-text" data-background-color="rose">
                            <h4 class="card-title">All Services</h4>
                            <p class="category">All services Display Below</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <tr>
                                    <th>ID</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td><img src="{{ url('storage/images/services/'.$service->icon) }}" style="width: 40px" alt="..." /> </td>
                                        <td><img src="{{ url('storage/images/services/'.$service->image) }}" style="width: 40px" alt="..." /> </td>
                                        <td>{{ $service->name }}</td>
                                        <td class="td-actions text-center">
                                            <form action="{{ route('admin.service.destroy',$service->id) }}" method="POST">
                                                <a type="submit" href="{{ route('admin.service.show',$service->id) }}" rel="tooltip" class="btn btn-info" data-placement="top" data-original-title="show" title="" style="padding: 7px">
                                                    <i class="material-icons">person</i>
                                                </a>
                                                <a type="submit" href="{{ route('admin.service.edit',$service->id) }}" rel="tooltip" class="btn btn-success" data-placement="top" data-original-title="edit" title="" style="padding: 7px">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('admin.service.edit',$service->id) }}" rel="tooltip" class="btn btn-danger" data-placement="top" data-original-title="delete" title="" style="padding: 7px">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

