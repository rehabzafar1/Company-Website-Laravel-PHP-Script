@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="material-icons">mail</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">All Emails</h4>
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="jobs" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="70px"> Sr No. </th>
                                        <th> Full Name </th>
                                        <th> Email </th>
                                        <th> Subject </th>
                                        <th> Date / Time </th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($emails as $email)
                                        <tr>
                                            <td>{{ $email->id }}</td>
                                            <td>{{ $email->name }}</td>
                                            <td>{{ $email->email  }}</td>
                                            <td>{{ $email->subject }}</td>
                                            <td>{{ $email->created_at }}</td>
                                            <td class="text-right">
                                                <a href="" class="btn btn-simple btn-info" data-toggle="modal" data-target="#noticeModal{{$email->id}}" rel="tooltip" data-placement="bottom" data-original-title="reply"><i class="material-icons">remove_red_eye</i></a>
                                                <a href="{{ route('admin.email.destroy', $email->id) }}" class="btn btn-simple btn-danger"><i class="material-icons" rel="tooltip" data-placement="bottom" data-original-title="delete">close</i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade in custom-modal" id="noticeModal{{$email->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-notice">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                        <h5 class="modal-title" id="myModalLabel">Query Message.</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="instruction">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p>
                                                                        {{ $email->message }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <a href="" class="btn btn-info btn-round" data-toggle="modal" data-dismiss="modal" data-target="#noticeModalReply{{ $email->id }}">Open</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade in custom-modal" id="noticeModalReply{{$email->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-notice">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                        <h5 class="modal-title text-center" id="myModalLabel">Reply</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="instruction">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <form method="POST" action="{{ route('admin.email.reply',$email->id) }}">
                                                                        @csrf
                                                                        <div class="form-group label-floating is-empty">
                                                                            <label class="control-label">Enter Subject</label>
                                                                            <input type="text" class="form-control" name="subject">
                                                                            <span class="material-input"></span>
                                                                        </div>
                                                                        <div class="form-group label-floating ">
                                                                            <textarea name="message" type="text" class="form-control" placeholder="Reply" style="min-height: 120px"></textarea>
                                                                            <span class="material-input"></span>
                                                                        </div>
                                                                        <div class="text-center">
                                                                        <button type="submit" class="btn btn-info btn-round">REPLY</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div><!-- end content-->
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div>
    </div>
    </div>
@endsection
