<?php

namespace App\Http\Controllers;
// Define route in web.php

// ChatController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatTranscript;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        // Store chat transcript in the database
        $chat = new ChatTranscript();
        $chat->message = $validatedData['message'];
        $chat->user_id = auth()->id(); // Assuming you have user authentication
        $chat->save();

        return response()->json(['success' => true]);
    }
}
