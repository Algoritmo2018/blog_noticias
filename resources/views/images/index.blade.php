@extends('layouts.app')


<div class="container">
    <h2>Image Upload</h2>
    <form action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control"  >
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    @if($errors->any())
    @foreach ($errors->all() as $error)
           {{$error}}

    @endforeach
    @endif
    <hr>

    <h2>Uploaded Images</h2>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/images/'.$image->image_path) }}" alt="{{ $image->title }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->title }}</h5>
                    </div>
                </div>
            </div>
            <form action="{{route('images.delete',$image->id)}}" method="POST">
                @csrf()
                @method('DELETE')

                <input type="hidden" name="id_image" id="image" class="form-control"  value="{{$image->id}}">
            <input type="hidden" name="image" id="image" class="form-control"  value="{{$image->image_path}}">
                <button type="submit">Apagar</button></form>
        @endforeach
    </div>
</div>

