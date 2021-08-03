@extends('admin.layout.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a type="submit" class="btn btn-success" href="{{ route('admin.career-category.create') }}">
             <span class="btn-label">
                    <i class="material-icons">keyboard_arrow_left</i>
                </span>
                        Add New Category
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Category</p>
                        <h3 class="card-title">Career</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i>
                            {{ $category->name }}
                        </div>
                    </div>
                    <div class="card-td-actions text-right" style="position: relative;bottom: -6px;top: unset">
                        <form action="{{ route('admin.career-category.destroy',$category->id) }}" method="POST">
                            <div class="text-center" style="position: absolute;top:-31px;right:14px">
                                <a type="submit" href="{{ route('admin.career-category.edit',$category->id) }}" rel="tooltip" class="btn btn-success" data-placement="bottom" data-original-title="edit" title="" style="padding: 7px">
                                    <i class="material-icons">edit</i>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" href="{{ route('admin.career-category.edit',$category->id) }}" rel="tooltip" class="btn btn-danger" data-placement="bottom" data-original-title="delete" title="" style="padding: 7px">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    @endforeach
        </div>
        </div>
    </div>
@endsection
