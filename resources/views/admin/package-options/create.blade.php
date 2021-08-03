@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <a class="btn btn-success pull-right" href="{{ route('admin.package-option.index') }}">
                <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                Back
            </a>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">person</i>
                        </div>

                        <div class="card-content">
                            <h4 class="card-title">Add Package List
                                <button type="button"  class="btn btn-sm btn-fill btn-rose  pull-right delete" style="padding: 5px 11px;margin: 0;margin-left: 5px">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" id="add" class="btn btn-sm btn-fill btn-success pull-right " style="padding: 5px 11px;margin: 0">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.package-option.store') }}" method="POST">
                                @csrf
                                <div id="items">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name[]"  required>
                                    <span class="material-input"></span>
                                    <p id="errquantity" class="em no-margin text-danger"></p>
                                </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

