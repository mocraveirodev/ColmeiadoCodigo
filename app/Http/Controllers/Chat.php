<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chat extends Controller
{
    public function viewChat(Request $request) {
        return view('chat');
    }
}
