<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'email' => 'required|email',
            'type' => 'required',
        ]);

        Auth::user()->messages()->create($validated);

        return response(['message' => 'message was created']);
    }
}
