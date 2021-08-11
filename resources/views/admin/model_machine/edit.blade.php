@extends('admin.layouts.app')
@section('title', 'Edit the loai')
@section('content')
    <div class="box-header with-border">
        <h3 class="box-title">EDIT MODELMACHINE</h3>
        <div class="box-tools" style="float: right; margin-top: -5px;margin-right: 2px">
            <a href="{{URL::to('model_machine')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> <span class="hidden-xs">Danh sách</span></a>
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

    <form method="post" action="{{ route('model_machine.update', ['id' => $model_machines->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{$model_machines->name}}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">CATEGORY</label>
            <select name="model_machines_id" class="form-control" placeholder="model_machines_id">
                @forelse($categories as $c)
                    <option @if($c->id === $model_machines->categories->id) selected @else  @endif value="{{ $c->id }}">{{ $c->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop

