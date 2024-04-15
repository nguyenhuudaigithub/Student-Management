<?php
// ChatController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatTranscript;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        // Get the logged-in user's name if available
        $userName = Auth::check() ? Auth::user()->name : 'Guest';

        // Store chat transcript in the database
        $chat = new ChatTranscript();
        $chat->message = $validatedData['message'];
        $chat->user_name = $userName;
        $chat->save();

        return response()->json(['success' => true]);
    }
}
