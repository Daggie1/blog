
@extends('layouts.master')

@section('content')
@include('patriats.header')
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>

    @endforeach()
</div>
<div class="content-section">
    <form method="POST" action="{{route('post_update',['id' => $post->id])}}">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <legend class="border-bottom mb-4">Update Post</legend>
            <div class="form-group">
           <div class="form-control-label">Title </div>
            <input type="text" class="form-control" id="title" name="title"
                   aria-describedby="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
            <div class="form-control-label">Description</div>
            <input type="text" class="form-control" id="description" name="description"
                      aria-describedby="title" value="{{$post->description}}"/>
</div>
        </fieldset>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-primary" value="Update">

        </div>
    </form>
</div>

@endsection
