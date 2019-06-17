<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;

class General extends Controller
{
     public function list(){
        $jobposts = JobPost::paginate(10);
        //ajax to panes
        if(\Request::ajax()){
            return JobPost::get();
        }
    }
}
