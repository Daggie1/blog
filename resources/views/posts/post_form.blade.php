
@extends('layouts.master')

@section('content')
@include('patriats.header')

    @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
        <p>{{ $error }}</p>
        </div>
    @endforeach()
        @endif

<div class="content-section">
    <form method="POST" action="{{route('post_insert')}}">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <legend class="border-bottom mb-4">Add a new Post</legend>
           <div class="form-control-label">Title </div>
            <input type="text" class="form-control" id="title" name="title"
                   aria-describedby="title" placeholder="eg laravel Migrations">
            <div class="form-control-label">Description</div>
            <textarea type="text" class="form-control" id="description" name="description"
                      aria-describedby="title" placeholder="eg laravel Migrations"></textarea>

        </fieldset>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-primary" value="Add">
        </div>

    </form>
</div>

@endsection
