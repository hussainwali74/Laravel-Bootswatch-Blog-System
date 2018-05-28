@extends('main')
@section('title','| Contact')
 
@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Contact Us</h1>
                <hr>
                <form >
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name = "email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" id="email" name = "email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea type="text" id="body" name = "body" class="form-control">Type your message here...</textarea>
                    </div>
                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
             </div>
        </div> <!-- end of header row -->
@endsection