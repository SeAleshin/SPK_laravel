<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClosedTasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::where('status', 'closed')->simplePaginate(10);

        return view('admin.closed', compact('clients'));
    }

    public function show(Client $client)
    {
        return view('admin.closed_show', compact('client'));
    }

    public function update(Client $client)
    {
        $attr = \request()->validate([
            'status' => '',
        ]);

        $client->update($attr);

        return redirect(route('new.show', $client));
    }
}
