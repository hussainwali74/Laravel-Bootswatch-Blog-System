@extends('main')

@section('title','| All Posts')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-10 col-md-9 col-sm-8">
            <h1>All Posts</h1>

        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post </a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div> <!-- end of .row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                        @foreach ($posts as $post )
                <tr>
                    <th>{{ $post->id }} </th>
                    <td>{{ $post->title }}</td>
                    <td>
                        {{ substr($post->body, 0, 30) }} {{ strlen($post->body) >30? '...': ''}}  <!-- don't want to show the whole body, here truncating to first few words-->
                     </td>
                    <td>{{ date('j M, Y H:ia',strtotime($post->created_at)) }}</td>
                    <td>
                         <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-secondary btn-sm">View</a> 
                         <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                    </td>
                </tr>
                    
                        @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {!! $posts->links(); !!}
            </div>
        </div>
    </div>


@stop