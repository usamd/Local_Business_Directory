<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;

class MessageController extends Controller
{
    // Method to send a message
    public function sendMessage(Request $request)
    {
        // Validate the request
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Create the message
        $message = Message::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        // Broadcast the event
        broadcast(new MessageSent($message))->toOthers();

        return response()->json(['status' => 'Message Sent!', 'message' => $message]);
    }

    // Method to get all messages
    public function getMessages()
    {
        $messages = Message::with('user')->get();
        return response()->json($messages);
    }
}
