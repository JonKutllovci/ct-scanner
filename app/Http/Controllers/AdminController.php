<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addView()
    {
        return view('admin.add_doctor');
    }

    public function addNews()
    {
        return view('admin.add_news');

    }


    public function add_post(Request $request)
    {
        $post = new News;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;

        $image = $request->image;
        $imagename  = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("news_image", $imagename);
        $post->image = $imagename;
        $post->save();

        return redirect()->back();


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
        $data = appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }


    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }


    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }


    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->file;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctor_image', $imagename);
            $doctor->image = $imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Details Updated Succesfuly!');
    }
}
