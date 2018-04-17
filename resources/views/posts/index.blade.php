@extends('layouts.app')

@section('content')

    @if(count($posts) > 0)
        @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                                <div class="panel-heading"><p><a href = "/posts/{{$post->id}}">{{$post->user->name}}</a></p>
                                <small>{{$post->created_at}}</small></div>
                                <div class="panel-body"><p>{{$post->body}}</p>

                                </div>
                                <p><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                
                                </div></div>
                        <div>
                    </div>
                </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found!</p>
    @endif
@endsection