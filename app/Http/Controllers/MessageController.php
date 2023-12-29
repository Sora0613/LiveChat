<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view("welcome", [
            'messages' => $messages,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'message_box' => 'required|string|max:255',
        ]);

        $text = $request->input('message_box');

        Message::create([
            'text' => $text,
        ]);

        return redirect()->route('home');
    }

    public function getData()
    {
        $messages = Message::orderBy('created_at', 'asc')->get();
        return response()->json([
            'messages' => $messages,
        ]);
    }
}
