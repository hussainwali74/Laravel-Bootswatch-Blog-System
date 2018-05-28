@extends('main')

@section('title', ' | Create New Post')

@section('stylesheets')
 {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Create new Post</h2>
            <hr>
            <form method="post" action="{{URL::to('posts/store')}}" enctype="multipart/form-data" data-parsley-validate="">
                @method('post')
                @csrf 
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" >
                  </div> 
                    <div class="form-group">
                      <label for="body">Body:</label>
                      <textarea name="body" id="body" class="form-control"></textarea>
                    </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                  </div>
              </form>
        </div>
    </div>
@endsection
@section('scripts')
{!! Html::style('js/parsley.mins.js') !!}

@endsection