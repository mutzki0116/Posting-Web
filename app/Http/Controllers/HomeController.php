<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;

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
        return view('home');
    }
    public function list(){
        $jobposts = JobPost::paginate(10);
        return view('home',[
            'jobposts' => $jobposts,
            ]);
    }
}
