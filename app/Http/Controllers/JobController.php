<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    //
    public function index(){
        $jobs=Job::all();
        return view('jobs.index',['jobs'=>$jobs]);
    }
    public function create(){
        $employers=Employer::all();
        // dd($employers);
        return view("jobs.create",['employers'=>$employers]);
    }
    public function store(){
        // dd(request()->all());
        request()->validate([
           'title'=>'required',
           'description'=>'required',
           'responsibility'=>'required',
           'requirement'=>'required',
           'salary'=>'required',
           'benefit'=>'required',
           'location'=>'required',
           'worktype'=>'required',
           'employer_id'=>'required',
        ]);

        $job=new Job;
        $job->title=request()->title;
        $job->description=request()->description;
        $job->responsibility=request()->responsibility;
        $job->requirement=request()->requirement;
        $job->salary=request()->salary;
        $job->benefits=request()->benefit;
        $job->location=request()->location;
        $job->worktype=request()->worktype;
        $job->employer_id=request()->employer_id;
        $job->save();
        return to_route('jobs.index');
    }
    public function show(Job $job){
        // dd($job->employer);
        return view('jobs.show',['job'=>$job,"employer"=>$job->employer]);
    }
    public function edit(Job $job){
        $employers=Employer::all();
        return view('jobs.edit',['job'=>$job,"employers"=>$employers]);
    }
    public function update(Job $job){
       

        $job->title=request()->title;
        $job->description=request()->description;
        $job->responsibility=request()->responsibility;
        $job->requirement=request()->requirement;
        $job->salary=request()->salary;
        $job->benefits=request()->benefit;
        $job->location=request()->location;
        $job->worktype=request()->worktype;
        $job->employer_id=request()->employer_id;
        $job->save();
        return to_route('jobs.show',$job->id);
    }
    public function destroy(Job $job){
        $job->delete();
        return to_route('jobs.index');
    }
}

