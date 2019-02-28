@extends('layouts.master')
@section('title')
@endsection
@section('content')
@include('patriats.header')
<article class="media content-section">
    <div class="media-body">
        <div class="article-metadata">
            <img class="rounded-circle article-img" src="{{ asset('img/profile_pictures/'.$post->user->picture) }}" alt="{{$post->user->picture}}"/>
            <a class="mr-2" href="{{route('edit_user',$post->user->id)}}">{{ $post->user->name}}</a>
            <small class="text-muted">{{$post->created_at }}</small>
            @if(Auth::user()->id==$post->user->id)
            <a href="{{route('edit_post',$post->id)}}" class="btn btn-outline-primary">Update</a>
            <a href="{{route('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>
                @endif
        </div>
        <h2><a class="article-title" href="#">{{ $post->title }}</a></h2>
        <p class="article-content">{{ $post->description }}</p>
    </div>
</article>
    @endsection
