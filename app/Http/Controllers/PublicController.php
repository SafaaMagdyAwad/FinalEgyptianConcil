<?php

namespace App\Http\Controllers;

use App\Jobs\MessageMailJob;
use App\Jobs\NewsLetterJob;
use App\Models\Category;
use App\Models\Message;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $topics=Topic::with('category')->where('published',1)->take(2)->latest()->get();
        $categories = Category::with(['topics' => function ($query) {
            $query->where('published', 1)
                  ->latest()
                  ->take(3);
        }])
        ->take(5)
        ->get();
        $testimonials=Testimonial::where('published',1)->get();
        return view('public.index',compact('topics','categories','testimonials'));
    }
    public function testimonials(){
        $testimonials=Testimonial::where('published',1)->get();
        return view('public.testimonials',compact('testimonials'));
    }
    public function topicslisting(){
        $popular=Topic::with('category')->whrere('published',1)->orderBy('views', 'desc')->paginate(10);//paginate
        $trending=Topic::with('category')->whrere('published',1)->whrere('trending',1)->get();
        $topics=['popular'=>$popular,'trending'=>$trending];
        return view('public.topics-listing',compact('topics'));
    }
    public function topicsDetail(String $id){
        $topic=Topic::with('category')->findOrFail($id);
        return view('public.topics-detail',compact('topic'));
    }
    public function contact(){
        return view('public.contact');
    }
    public Function sendContactMessage(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);
        $data['isread']=0;
        //store in Db
        Message::create($data);
        //send email in job 
        // php artisan queue:work      
        MessageMailJob::dispatch($data);
        return redirect()->route('index');
    }
    public function search(Request $request){
        // keyword
        $topics = Topic::whereHas('category', function ($query) use ($request) {
            $query->where('category', $request->keyword);
        })->get(); 
        dd($topics);
        //return view('public.topics',compact('topics'));
    }


}
