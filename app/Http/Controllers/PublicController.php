<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public.index');
    }
    public function testimonials(){
        return view('public.testimonials');
    }
    public function topicslisting(){
        return view('public.topics-listing');
    }
    public function topicsDetail(){
        return view('public.topics-detail');
    }
}
