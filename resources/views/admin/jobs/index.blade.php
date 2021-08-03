@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a type="submit" class="btn btn-success" href="{{ route('admin.jobs.create') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Add New Job
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">All Jobs</h4>
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="jobs" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="70px"> Sr No. </th>
                                        <th> Job Title </th>
                                        <th> Category </th>
                                        <th> Type </th>
                                        <th> Experience </th>
                                        <th> location </th>
                                        <th> Deadline </th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                    <tr>
                                        <td>{{ $job->id }}</td>
                                        <td>{{ $job->name }}</td>
                                        <td>{{ $job->category->name  }}</td>
                                        <td>{{ $job->type }}</td>
                                        <td>{{ $job->experience }}</td>
                                        <td>{{ $job->location }}</td>
                                        <td>{{ $job->expiry }}</td>
                                        <td class="text-right">
                                            <form method="POST" action="{{ route('admin.jobs.destroy',$job->id) }}">
                                            <a href="{{ route('admin.jobs.show',$job->id) }}" type="submit" class="btn btn-simple btn-info btn-icon like" rel="tooltip" data-placement="bottom" title="" data-original-title="View"><i class="material-icons">favorite</i></a>
                                            <a href="{{ route('admin.jobs.edit',$job->id) }}" type="submit" class="btn btn-simple btn-warning btn-icon edit" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit"><i class="material-icons">edit</i></a>
                                            @csrf
                                                @method('DELETE')
                                                <button href="{{ route('admin.jobs.edit',$job->id) }}" type="submit" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end content-->
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->
            </div> <!-- end row -->

        </div>
    </div>
@endsection
@push('scripts')

@endpush
