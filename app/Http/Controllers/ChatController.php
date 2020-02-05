<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ChatController extends Controller
{
    public function viewChat(Request $request) {
        $user = Auth::user();
        return view('chat',["user"=>$user]);
    }
}
