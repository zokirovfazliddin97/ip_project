@extends('layouts.app')

@section('content')

            <div class="row marginMinus">

                    <div class="col-md-6 col-md-offset-3">
                    @if(count($posts) > 0)
                            @foreach($posts as $post)
                        <div class="panel panel-default">
                                <div class="panel-heading" style="font-size: larger; padding-top: 7px; padding-bottom: 0px; padding-left: 5px; padding-right: 0px; background-color: #ffffff">
                               <div class="row">
                               <div class="col-md-1">
                                <a href = "/posts/{{$post->id}}">
                                <img style=" border-radius: 40px; width: 40px; height: 40px;" src="/storage/cover_images/iconlog.jpg">
                              </a></div>
                                <div class="col-md-4 pull-left" style="">
                                <a href = "/posts/{{$post->id}}" style="padding-bottom: 0px;">{{$post->user->name}}</a><br/>
                                <small  style=" font-size:x-small ">Posted ~ {{$post->created_at}}</small>
                                </div>

                            <div class="col-md-7 pull-right" >
                <i  class="pull-right btn-dark" style="margin: 10px;margin-top: 0px;">
                                                     <span class="glyphicon glyphicon-option-horizontal"></span></i>
    <span class="pull-right" style="float:right;"><span style="background-color: #9acfea; color: #ffffff; padding: 10px;border-radius: 10px">{{$post->title}}</span>
 <span style="background-color: #ff0000; color: #ffffff; padding: 10px; border-radius: 10px; font-weight: bold">sale-{{$post->amount}}%</span></span>

                                </div>
                                </div>


                              </div>
                                <div class="panel-body"><p>{{$post->body}}</p>

                                </div>




                                @if($post->cover_image != "noimage.jpg")
                                <p><img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"></p>
                                @endif

                                @if(auth()->check())
                                <div class="row text-center">

                                <div class="col-md-4"><a href="#" class="btn ">Like</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Comment</a></div>
                                <div class="col-md-4"><a href="#" class="btn ">Share</a></div>
</div>

                                @endif

                        @if(!Auth::guest() && (Auth::user()->id == $post->user_id))
                                                                           <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                                                                               {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=> 'btn'])!!}
                                                                                   {{Form::hidden('_method','DELETE')}}
                                                                                   {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                                               {!!Form::close()!!}

                                                                           @endif
                                </div>
        @endforeach

    </div>

   @include('/posts/recomended')

    </div>


    @else
        <p>No post found!</p>
    @endif
@endsection

<!-- <i  class="pull-right btn-dark">
      <span class="glyphicon glyphicon-option-horizontal"></span></i>


      -->