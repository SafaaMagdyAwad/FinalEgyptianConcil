<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $read=Message::where('isread',1)->get();
        $unread=Message::where('isread',0)->get();
        $messages=['read'=>$read,'unread'=>$unread];
        return view('admin.message.index',compact('messages'));
    }
    public function read(Message $message){
        $message->update([
            'isread'=> 1,
        ]);
        return view('admin.message.details',compact('message'));
    }
    public function destroy(Message $message){
        $message->delete();
        return redirect()->route('message.index');
    }

}
