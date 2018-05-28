@extends('main')
@section('title','')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h3>Welcome to blog</h3>
            <p class="lead">
                Thank you for visiting the blog. <p>
                <a href="" class="btn btn-primary btn-lg" role="button">
                    Popular Posts
                </a>
            </p>
        </div>
    </div>
</div> <!-- end of header row -->
<div class="row">
    <div class="col-md-8">
        @foreach( $posts as $post)

        <div class="post">
            <h3>{{ strlen($post->title) > 30 ? substr($post->title, 0, 10) : $post->title }} </h3>
            <p>{{ strlen($post->body) > 50 ? substr($post->body, 0, 50).' ...' : $post->body }} </p>
            <a href="{{ URL::route('pages.single',['id' => $post->id ]) }}" class="btn btn-primary">Read More</a>
        </div>
        <hr>
        @endforeach
    </div>
    <div class="col-md-offset-1 col-md-3">
        <h4>Recent Posts</h4>
    </div>
</div>
@endsection
