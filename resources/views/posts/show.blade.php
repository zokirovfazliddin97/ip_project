@extends('layouts.app')

@section('content')

 @foreach($posts as $post)
            <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-default">
                                        <div class="panel-heading"><p>{{$post->title}}</p>
                                        <small>Written on {{$post->created_at}}</small></div>
                                        <div class="panel-body">{{$post->body}}</div>
                                         <p><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                         <hr/>
                                </div>
                        </div>
                </div>


    @if(!Auth::guest() && (Auth::user()->id == $post->user_id))
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=> 'btn'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif

@endforeach
@endsection