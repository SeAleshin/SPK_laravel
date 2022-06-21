<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class SearchClosedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(SearchRequest $searchRequest)
    {
        $attr = $searchRequest->validated();
        $search = $attr['search'];

        $clients = Client::where('status', 'closed')
            ->where('tel', $search)
            ->orWhere('email', $search)
            ->orWhere('id', $search)
            ->simplePaginate();

        return view('admin.closed', compact('clients'));
    }
}
