<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }


    public function chairmanMessage()
    {
        return view('pages.chairman');
    }
    public function principalMessage()
    {
        return view('pages.principal');
    }
    public function governingBody()
    {
        return view('pages.governing-body');
    }

    public function results()
    {
        return view('pages.results');
    }
    public function notices()
    {
        return view('pages.notices');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
}
