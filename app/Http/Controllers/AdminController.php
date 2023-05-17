<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addView()
    {


        return view('admin.add_doctor');
    }


    public function upload(Request $request)
    {

        $doctor = new doctor;
        $image = $request->file;
        $image_name = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('doctor_image', $image_name);
        $doctor->image=$image_name;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully!');


    }
}
