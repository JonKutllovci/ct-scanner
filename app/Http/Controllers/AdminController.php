<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
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
        $doctor->image = $image_name;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Added Successfully!');
    }

    public function showappointment()
    {
        $data = appointment::all();

        return view('admin.showappointment', compact('data'));
    }


    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }


    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }
}
