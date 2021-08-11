@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
    <h1 style="text-align: center">List News</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Content Day</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($news as $n)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('new.edit',['id'=>$n->id])}}">{{$n->name }}</a></td>
                <td><a href="{{route('new.edit',['id'=>$n->id])}}">{{$n->title }}</a></td>
                <td><a href="{{route('new.edit',['id'=>$n->id])}}">{{$n->content }}</a></td>
                <td><a href="{{route('new.edit',['id'=>$n->id])}}">{{$n->content_day }}</a></td>
                <td><img  width="120" src="{{ asset('storage/'. str_replace('public', '', $n->image))}}"></td>
                <td><a href="{{ route('new.destroy', ['id' => $n->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

