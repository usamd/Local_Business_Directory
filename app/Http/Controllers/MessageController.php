<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;
use Auth;

class MessageController extends Controller
{
    public function sendMessage($request)
    {
        $message = auth()->user()->messages()->create([
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);

        broadcast(new MessageSent(auth()->user(), $message->load('user')))->toOuthers();

        return response(['status'=>'Message sent successfully']);
    }

    public function fetchMessages($receiverId)
    {
        $userId = auth()->id();

        return Message::with('user')->get();
    }
}

