@extends('layouts.master')
@section('title') {{$user->name}}@endsection
@section('content')
    @include('patriats.header')
        <div class="content-section">
            <div class="media">
                <img class="rounded-circle account-img" src="{{asset('img/profile_pictures/'.$user->picture)}}">
                <div class="media-body">
                    <h2 class="account-heading">{{$user->name}}</h2>
                    <p class="text-secondary">{{$user->email}}</p>
                </div>
            </div>
            @if(Auth::user()->id==$user->id)
            <form method="POST" action="{{route('update_user',$user->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset class="form-group">
                    <legend class="border-bottom mb-4">Account Info</legend>
                    <div class="form-group">
                        <div class="form-check--label">Username</div>
                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"/>

                    </div>
                    <div class="form-group">
                        <div class="form-check--label">Email</div>
                        <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}"/>

                    </div>
                    <div class="form-group">
                        <div class="form-check--label">Update Profile Picture</div>
                        <input type="file"name="picture" id="picture" class="form-control"/>

                    </div>
                </fieldset>
                <div class="form-group">
                    <input type="submit"  class="btn btn-outline-primary" value="Update">
                </div>
            </form>

                @endif
        </div>
        @endsection
