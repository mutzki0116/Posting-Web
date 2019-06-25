<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobPost;
class newsController extends Controller
{
    
    public function getnews() {
        $this->middleware('cors');
        return json_encode(JobPost::get());
    }
}
