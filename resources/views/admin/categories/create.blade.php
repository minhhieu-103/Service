@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1>Create Category</h1>
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

    <form method="post" action="{{route('category.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
{{--            <input type="text" name="value" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">--}}
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@stop

