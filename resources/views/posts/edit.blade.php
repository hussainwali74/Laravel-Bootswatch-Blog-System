@extends('main')

@section('title','| View Post')

@section('content')
<br>
<div class="row ">

    <div class="col-md-8"> 
    {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}

        {{ Form::label('title','Title:') }}
        {{ Form::text('title', null, ['class' => 'input-lg form-control form-control-lg']) }}        
<br>
        {{ Form::label('body','Body:') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}

        {!! Form::close() !!}
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
                    <a href="{{ URL::route('posts.show',[$post->id]) }}" class="btn btn-primary btn-block">Cancel</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ URL::route('posts.update',[$post->id]) }}" class="btn btn-success btn-block">Save</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection