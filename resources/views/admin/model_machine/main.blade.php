@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
    <h1 style="text-align: center">List Model Machine</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($model_machines as $c)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('model_machine.edit',['id'=>$c->id])}}">{{$c->name }}</a></td>
                <td>{{$c->categories->name}}</td>
                <td><a href="{{ route('model_machine.destroy', ['id' => $c->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

