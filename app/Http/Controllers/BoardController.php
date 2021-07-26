<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('board');
    }

    public function task()
    {
        return view('task');
    }
    public function slack()
    {
        return view('slack');
    }
    public function products()
    {
        return view('products');
    }
    public function coinbase()
    {
        return view('coinbase');
    }
    public function sidebar()
    {
        return view('sidebar');
    }
}
