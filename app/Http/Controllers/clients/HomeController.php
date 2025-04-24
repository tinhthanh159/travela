<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Home;

class HomeController extends Controller
{
    private $homeTours;

    public function __construct(){ 
        $this->homeTours = new Home();
    }
    public function index()
    {
        $title = 'Trang chủ';
        $tours = $this->homeTours->getHomeTours();
        $tours_domain = $this->homeTours->getHomeTours_domain();
        // dd($tours);
        return view('clients.home', data: compact('title','tours','tours_domain'));
    }

}
