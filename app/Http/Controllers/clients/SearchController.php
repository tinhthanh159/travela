<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SearchController extends Controller
{

    public function index(Request $request)
    {
        $title = 'Tìm kiếm';
        return view('clients.search', compact('title'));
    }   
}