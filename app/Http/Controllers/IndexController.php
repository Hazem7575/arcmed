<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index() {
        $sliders = Section::where('key' , 'slider')->select('image' , 'text')->get();
        $opinions = Section::where('key' , 'opinions')->select('image' , 'text')->get();
        return view('welcome' , compact('sliders' , 'opinions'));
    }

    public function about() {
        return view('about');
    }

    public function department() {
        return view('Department');
    }

    public function doctors() {
        return view('Doctors');
    }

    public function gallery() {
        return view('Gallery');
    }

    public function contact() {
        return view('Contact');
    }


    public function NotFound() {
        return 'false';
    }
}
