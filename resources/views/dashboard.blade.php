@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">

                            <div class="panel-heading"><a href="/posts/create" class="btn btn-danger">Share a sale</a></div>

                    </div>
            </div>
    </div>

    @if(count($posts) > 0)
      @foreach($posts as $post)
            <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><p>{{$post->title}}</p>
                                        <small>Written on {{$post->created_at}}</small></div>
                                        <div class="panel-body">{{$post->body}}</div>
                                         <p><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                </div>
                        </div>
                </div>
        @endforeach
        @else
            <p>No posts yet</p>
    @endif
</div>

@endsection
