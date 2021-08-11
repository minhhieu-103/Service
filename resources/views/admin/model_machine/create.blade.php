@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1>Create Model Machine</h1>
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

    <form method="post" action="{{ route('model_machine.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
        </div>
        <div class="form-group">
            <select name="categories_id" class="form-control">
                @forelse($categories as $ct)
                    <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                @empty
                    <option>No data</option>
                @endforelse
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@stop

