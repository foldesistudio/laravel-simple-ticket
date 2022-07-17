<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post as Model;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        /** @var TYPE_NAME $posts */
        $posts = Model::all();
        return view('home', compact('posts'));
    }
}
