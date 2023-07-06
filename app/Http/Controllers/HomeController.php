<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\News;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function blog()
    {
        $allNews = News::all();
        // $latest = $allNews->take(3);
        $posts = $allNews->take(10); // get first 5 items for the posts section
        $data = $allNews->skip(10); // get the rest for the data section
        return view('blog-news.news', compact('posts', 'data'));

    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = Doctor::all();
            $latest = News::all()->take(3);

            return view('user.home', compact('doctor', 'latest'));
        }
    }

    public function appointment(Request $request)
    {

        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';

        if (Auth::id()) {

            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful . We will contact you soon!');
    }


    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();

            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }



}
