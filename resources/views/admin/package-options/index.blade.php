@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
            <a type="submit" class="btn btn-success" href="{{ route('admin.package-option.create') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                Add List Items
            </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Simple Table</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($packageoptions as $data)
                                    <tr>
                                        <td class="text-center">{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td class="td-actions text-right">

                                            <form method="POST" action=" {{ route('admin.package-option.destroy',$data->id) }}">
                                                <a href="{{ route('admin.package-option.show',$data->id) }}" type="submit" rel="tooltip" class="btn btn-info" data-original-title="" title="show">
                                                    <i class="material-icons">person</i>
                                                </a>
                                                <a type="button" href="{{ route('admin.package-option.edit',$data->id) }}" rel="tooltip" class="btn btn-success" data-original-title="" title="edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('admin.package-option.edit',$data->id) }}" rel="tooltip" class="btn btn-danger" data-original-title="" title="delete">
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



