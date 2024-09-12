<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use Illuminate\Support\Facades\Hash;

class EmployerContoller extends Controller
{
    //
    public function index(){
        $employers=Employer::all();
        return view('employers.index',["employers"=>$employers]);
    }
    public function create(){
        return view("employers.create");
    }
    public function store(){
        //Any validation should be implmented before store
        // dd(request()->all());
        request()->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email:rfc,dns','unique:employers'],
            'password'=>'required',
            'address'=>'required',
            'bio'=>'required',
            'age'=>'required',
            'experience'=>'required'
        ]);
        $employer=new Employer;
        $employer->name=request()->name;
        $employer->email=request()->email;
        $employer->password=Hash::make(request()->password);
        $employer->address=request()->address;
        $employer->bio=request()->bio;
        $employer->age=request()->age;
        $employer->experience=request()->experience;
        $employer->gender=request()->gender;
        $employer->save();
        return to_route('employers.index');
    }
    public function show(Employer $employer){
        return view('employers.show',["employer"=>$employer]);
    }
    public function edit(Employer $employer){
        return view('employers.edit',['employer'=>$employer]);
    }
    public function update(Employer $employer){
        // dd(request()->all());
        request()->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email:rfc,dns','unique:employers'],
            'password'=>'required',
            'address'=>'required',
            'bio'=>'required',
            'age'=>'required',
            'experience'=>'required'
        ]);

        $employer->name=request()->name;
        $employer->email=request()->email;
        $employer->password=request()->password;
        $employer->address=request()->address;
        $employer->bio=request()->bio;
        $employer->age=request()->age;
        $employer->experience=request()->experience;
        $employer->gender=request()->gender;
        $employer->save();
        return to_route('employers.show',$employer->id);
    }
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return to_route('employers.index');
    }
}
