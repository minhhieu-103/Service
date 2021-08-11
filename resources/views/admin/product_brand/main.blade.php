@extends('admin.layouts.app')
@section('title', 'Danh sach the loai')
@section('content')
    <h1 style="text-align: center">List Partner</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Price old</th>
            <th scope="col">Status</th>
            <th scope="col">Desc</th>
            <th scope="col">Sale off</th>
            <th scope="col">image</th>
            <th scope="col">model_machines_id</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
        @forelse($product_brands as $bp)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{$bp->name}}</a></td>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{number_format($bp->price)}} VNĐ</a></td>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{number_format($bp->price_old)}} VNĐ</a></td>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{$bp->status}}</a></td>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{$bp->desc}}</a></td>
                <td><a href="{{route('productbrand.edit',['id'=>$bp->id])}}">{{$bp->sale_off }}</a></td>
                <td><img width="120" src="{{ asset('storage/'. str_replace('public', '', $bp->image))}}" /></td>
                <td>{{ $bp->model_machines->name }}</td>
                <td><a href="{{ route('productbrand.destroy', ['id' => $bp->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop

