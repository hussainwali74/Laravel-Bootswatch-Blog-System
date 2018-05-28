@extends('main')

@section('title','| View Post')

@section('content')
<br>
<div class="row ">
    <div class="col-md-8">

        
        <h1>{{ $post->title }}</h1>
        
        <p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4 ">
        <div class="bg-light p-1 border  rounded rounded-4 mx-auto">
            <dl class="row  mx-auto">
                <dt class="col-md-5">Created At:</dt>
            <dd class="col-md-7">{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="row mx-auto">
                <dt class="col-md-5">Last Updated At:</dt>
                <dd class="col-md-7">{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row p-1">
                <div class="col-sm-6">
                    <a href="{{ URL::route('posts.edit',[$post->id]) }}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete',['class' => 'btn btn-danger btn-block']) !!}    
                    {!! Form::close() !!}
                </div> 
                <br>
                <br>
                <div class="col-sm-12">
                    <a class="btn btn-secondary btn-sm btn-block" href="{{ URL::route('posts.index')}}"><< See All Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection