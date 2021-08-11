@extends('admin.layouts.app')
@section('title', 'Danh sach san pham')
@section('content')
    <h1 style="text-align: center">List Product</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">ModelMachine</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

        <?php  $stt = 1;?>
{{--        @if() @endif--}}

        @forelse($products as $pr)
            <tr>
                <th scope="row">{{ $stt }}</th>
                <td><a href="{{route('product.edit',['id'=>$pr->id])}}">{{$pr->name }}</a></td>
                <td>{{ $pr->model_machines->name }}</td>
                <td><a href="{{ route('product.destroy', ['id' => $pr->id]) }}">Delete</a></td>
            </tr>
            <?php $stt++;?>
        @empty
        @endforelse
        </tbody>
    </table>
@stop
@section('script')
    <script src=""></script>
    <script>
        sdfhjashfa
    </script>
    @endsection
@section('style')
    @endsection

