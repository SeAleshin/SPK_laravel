<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(SearchRequest $searchRequest)
    {
        $attr = $searchRequest->validated();
        $search = $attr['search'];

        $clients = Client::where('status', 'open')
            ->where('tel', $search)
            ->orWhere('email', $search)
            ->orWhere('id', $search)
            ->simplePaginate();

            return view('admin.new', compact('clients'));
    }
}
