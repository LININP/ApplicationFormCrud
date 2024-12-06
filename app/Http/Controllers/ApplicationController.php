<?php

namespace App\Http\Controllers;
use App\Models\Application;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
   public function index(){
    return view('application.index');
   }

   public function store(Request $request){
    $application = new Application();
    $application->course=$request->course;
    $application->photo=($request->has('photo'))?$request->file('photo')->store('applicant_image', 'uploads'):NULL;
    $application->admission_no=$request->admission_no;
    $application->college=$request->college;
    $application->applicant_name=$request->applicant_name;
    $application->gender=$request->gender;
    $application->date_of_birth=$request->date_of_birth;
    $application->age=$request->age;
    $application->nationality=$request->nationality;
    $application->father_name=$request->father_name;
    $application->mother_name=$request->mother_name;
    $application->religion=$request->religion;
    $application->permanant_address=$request->permanant_address;
    $application->communication_address=$request->communication_address;
    $application->phone_number=$request->phone_number;
    $application->mobile_no=$request->mobile_no;
    $application->email=$request->email;
    $application->signature=($request->has('signature'))?$request->file('signature')->store('applicant_image', 'uploads'):NULL;
    $application->save();

    return redirect()->route('viewform');

   }

   public function dashboard(){
    return view('admin.dashboard');
   }

   public function viewapplicnt(){
    return view('admin.view',[
    'applications'=>Application::get()
]);

}

public function allapplicants(){
    return view('admin.alldetailsview',[
    'applications'=>Application::get()
]);

}

public function edit(Application $application) {
    return view('admin.edit', [
        'application' => $application,
    ]);
}

public function update(Request $request, Application $application)
{
    $application->course=$request->course;
    $application->photo=($request->has('photo'))?$request->file('photo')->store('applicant_image', 'uploads'):NULL;
    $application->admission_no=$request->admission_no;
    $application->college=$request->college;
    $application->applicant_name=$request->applicant_name;
    $application->gender=$request->gender;
    $application->date_of_birth=$request->date_of_birth;
    $application->age=$request->age;
    $application->nationality=$request->nationality;
    $application->father_name=$request->father_name;
    $application->mother_name=$request->mother_name;
    $application->religion=$request->religion;
    $application->permanant_address=$request->permanant_address;
    $application->communication_address=$request->communication_address;
    $application->phone_number=$request->phone_number;
    $application->mobile_no=$request->mobile_no;
    $application->email=$request->email;
    $application->signature=($request->has('signature'))?$request->file('signature')->store('applicant_image', 'uploads'):NULL;
    $application->save();
    return redirect()->route('viewapplicntpage');
}


public function delete(Application $application){
    $application->delete();
    return redirect()->route('viewapplicntpage');

}


}
