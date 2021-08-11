@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
{{--    <div class="alert alert-success">--}}

       <h1 class="success"> {{ session('message') ? session('message') : " " }}</h1>

    <h1 style="text-align: center ">List Category</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($categories as $c)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a >{{$c->name }}</a></td>
                <td>
                <button class="btn btn-primary"><a href="{{route('category.edit',['id'=>$c->id])}}"><i class="fas fa-pencil-alt " style="color: white"></i></a></button>
                    <button class="btn btn-danger"><a href="{{ route('category.destroy', ['id' => $c->id]) }}"><i class="fas fa-trash-alt" style="color: white"></i></a></button>
                </td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

