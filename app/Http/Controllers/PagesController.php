<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();   
        return view('pages/welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = "hussain";
        $last = "wali";
        $mail = "hussain@gmail.com";
        $data = [];
        $data['first'] = $first;
        $data['last'] = $last;
        $data['email'] = $mail;
        $fullname = $first.' '.$last;
        return view('pages/about')->with('data',$data);
    }

    public function getContact()
    {
        return view('pages/contact');
    }
    public function postContact()
    {
        # code...
    }
}