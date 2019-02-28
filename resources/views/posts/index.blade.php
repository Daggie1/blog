@extends('layouts.master')
@section('title')
@endsection
@section('content')
    @include('patriats.header')
    @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
    @endif
    @if(count($posts)>0)
        @foreach($posts as $post)
            <article class="media content-section">
                <img class="rounded-circle article-img" src="{{ asset('img/profile_pictures/'.$post->picture) }}" alt="{{$post->picture}}"/>
                <div class="media-body">
                    <div class="article-metadata">
                        <a class="mr-2" href="{{route('edit_user',$post->userid)}}">{{$post->name}}</a>
                        <small class="text-muted">{{ $post->created_at }}</small>
                    </div>
                    <h2><a class="article-title" href="{{route('post_details',[$post->id])}}">{{ $post->title }}</a></h2>
                    <p class="article-content">{{ $post->description}}</p>
                </div>
            </article>
            @endforeach
    @endif
@endsection

