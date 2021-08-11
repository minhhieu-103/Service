@extends('admin.layouts.app')
@section('title', 'Edit the loai')
@section('content')
    <h1 style="">Edit the loai</h1>
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

    <form method="post" action="{{ route('productbrand.update', ['id' => $product_brands->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$product_brands->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" value="{{$product_brands->price}}" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price_Old</label>
            <input type="text" value="{{$product_brands->price_old}}" name="price_old" class="form-control" id="" placeholder="Price_Old">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" value="{{$product_brands->status}}" name="status" class="form-control" id="" placeholder="Status">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Desc</label>
            <input type="text" value="{{$product_brands->desc}}" name="desc" class="form-control" id="" placeholder="Desc">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Sale</label>
            <input type="text" value="{{$product_brands->sale_off}}" name="sale_off" class="form-control" id="" placeholder="Sale">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">MODEL MACHINE</label>
            <select name="model_machines_id" class="form-control" placeholder="model_machines_id">
                @forelse($model_machines as $model)
                    <option @if($model->id === $product_brands->model_machines->id) selected @else  @endif value="{{ $model->id }}">{{ $model->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file">
            <div>
                <img  width="120" src="{{ asset('storage/'. str_replace('public', '', $product_brands->image))}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cap nhat</button>
    </form>
@stop

