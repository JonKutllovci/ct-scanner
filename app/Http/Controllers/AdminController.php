<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        $post = new News;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->name = $name;
        $post->user_id = $user_id;
        $post->usertype = $usertype;
        $post->post_status = 'active';
        $image = $request->image;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("news_image", $imagename);
            $post->image = $imagename;
        }
        $post->save();
        return redirect()->back()->with('message', 'News added successfully!');
    }

    public function show_news()
    {
        $post = News::all();

        return view('admin.shownews', compact('post'));
    }


    public function delete_post($id)
    {
        $post = News::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post Deleted Successfully');
    }

    public function update_post($id)
    {
        $post = News::find($id);

        return view('admin.update_news', compact('post'));
    }

    public function update_news(Request $request, $id)
    {
        $data = News::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->body = $request->body;
        $image = $request->image;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("news_image", $imagename);
            $data->image = $imagename;
        }
        $data->save();

        return redirect()->back()->with('message', 'Post Updated Successfully!');
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
