@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="material-icons">assignment</i>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">All Sub Categories</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th> SR# </th>
                                        <th> ICON </th>
                                        <th> NAME </th>
                                        <th> MAIN SERVICE </th>
                                        <th> DESCRIPTION </th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subServices as $subService)
                                    <tr>
                                        <td>{{ $subService->id }}</td>
                                        <td><img class="img" src="{{ url('storage/images/services/sub-services/'.$subService->icon) }}" style="width: 40px" /></td>
                                        <td>{{ $subService->name }}</td>
                                        <td> {{ $subService->service->name }}</td>
                                        <td> {{ $subService->description }}</td>
                                        <td class="text-right">
                                            <form method="POST" action="{{ route('admin.sub-service.destroy',$subService->id) }}">
                                            <a type="submit" href="{{ route('admin.sub-service.edit',$subService->id) }}" class="btn btn-simple btn-warning btn-icon edit" rel="tooltip" data-placement="bottom" data-original-title="edit"><i class="material-icons">edit</i></a>
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-simple btn-danger btn-icon remove" rel="tooltip" data-placement="bottom" data-original-title="remove"><i class="material-icons">close</i></button>
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
    </div>
@endsection
