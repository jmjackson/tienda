<?php

namespace Rainbows\Http\Controllers;

use Illuminate\Http\Request;

use Rainbows\Http\Requests;
use Rainbows\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

        public function contacto()
    {
        return view('contacto');
    }

        public function acerca()
    {
        return view('acerca');
    }
    
}
