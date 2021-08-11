@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1 style="text-align: center ">CREATE NEW</h1>
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

    <form method="post" action="{{ route('new.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input type="text" value="{{ old('title') }}" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input type="text" value="{{ old('content') }}" name="content" class="form-control" placeholder="Content">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Content Day</label>
            <input type="text" value="{{ old('content_day') }}" name="content_day" class="form-control" placeholder="Content_Day">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@stop

