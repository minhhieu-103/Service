@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1 style="text-align: center">CREATE PRODUCT BRAND</h1>
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

    <form method="post" action="{{ route('productbrand.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" value="{{ old('price') }}" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price old</label>
            <input type="text" value="{{ old('price_old') }}" name="price_old" class="form-control" placeholder="Price_Old">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Sale Off</label>
            <input type="text" value="{{ old('sale_off') }}" name="sale_off" class="form-control" placeholder="Sale_off">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Desc</label>
            <input type="text" value="{{ old('desc') }}" name="desc" class="form-control" placeholder="Desc">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" value="{{ old('status') }}" name="status" class="form-control" placeholder="Status">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Model Machine</label>
            <select name="model_machines_id" class="form-control">
                @forelse($model_machines as $ca)
                    <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>


        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@stop

