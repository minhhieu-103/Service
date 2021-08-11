    @extends('admin.layouts.app')
@section('title', 'Edit the loai')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title text-center">EDIT CATEGORY</h3>
        <div class="box-tools" style="float: right; margin-top: -5px;margin-right: 2px">
            <a href="{{URL::to('category')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="hidden-xs">Danh sách</span></a>
        </div>
    </div>
    <h1>{{ (session('message') ? session('message') : " ") }}</h1>
    <div class="error">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form method="post" action="{{route('category.update', ['id' => $category->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1 margin-left-3px">Name</label>
            <input type="text" value="{{$category->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <button type="submit" class="btn btn-primary margin-left-3px">Update Here</button>
    </form>
@stop

