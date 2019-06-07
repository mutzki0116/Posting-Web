<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;

class JobPostsController extends Controller
{
    public function list(){

        $jobposts = JobPost::paginate(10);
        return view('internal.posts',[
            'jobposts' => $jobposts,
            ]);
    }
     public function store(){
        
        $data = request()->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'job_address' => 'required',
        ]);
        JobPost::create($data);
        // $jobpost = new JobPost();
        // $jobpost->job_title = request('jobtitle');
        // $jobpost->job_description = request('jobdesc');
        // $jobpost->job_address = request('jobadd');
        // $jobpost->save();
        return redirect('news');
    }
    public function show($jobpost){
        $jobpost = JobPost::where('id', $jobpost)->firstOrFail();
        return view('editjobpost', compact('jobpost'));
    }
    public function show2($jobpost){
        $jobpost = JobPost::where('id', $jobpost)->firstOrFail();
        return view('deletejobpost', compact('jobpost'));
    }
    public function update($jobpost){
        $jobpost = JobPost::where('id', $jobpost)->firstOrFail();
        $data = request()->validate([
            'job_title' => 'required',
            'job_description' => 'required',
            'job_address' => 'required',
        ]);
        $jobpost->update($data);
        return redirect('news');
    }
    public function destroy(JobPost $jobpost){
        //$jobpost = JobPost::where('id', $jobpost)->firstOrFail();
        $jobpost->delete();
        return redirect('news');
    }
}
