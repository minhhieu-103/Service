@extends('admin.layouts.app')
@section('title', 'Tao san pham moi')
@section('content')
    <h1 style="text-align: center">Create Products</h1>
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


    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="ENTER NAME">
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
@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            })
            .catch( error => {
                console.error( error );
            } );

        // editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        //     return new MyUploadAdapter( loader );
        // };
        //
        // class MyUploadAdapter {
        //     constructor( loader ) {
        //         // The file loader instance to use during the upload.
        //         this.loader = loader;
        //     }
        //
        //     // Starts the upload process.
        //     upload() {
        //         // Update the loader's progress.
        //         server.onUploadProgress( data => {
        //             loader.uploadTotal = data.total;
        //             loader.uploaded = data.uploaded;
        //         } );
        //
        //         // Return a promise that will be resolved when the file is uploaded.
        //         return loader.file
        //             .then( file => server.upload( file ) );
        //     }
        //
        //     // Aborts the upload process.
        //     abort() {
        //         // Reject the promise returned from the upload() method.
        //         server.abortUpload();
        //     }
        // }
    </script>
@endsection
