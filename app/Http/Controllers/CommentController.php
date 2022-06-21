<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Client $client, CommentRequest $commentRequest)
    {
        $attributes = $commentRequest->validated();
        $attributes['user_id'] = auth()->id();
        $attributes['client_id'] = $client->id;

        Comment::create($attributes);

        return back();
    }
}
