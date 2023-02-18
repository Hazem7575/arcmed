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

        return Inertia::render('Welcome' , [
            'sliders' => $sliders,
            'opinions' => $opinions
        ]);
    }

    public function about() {
        return Inertia::render('About');
    }
    public function NotFound() {
        return 'false';
    }
}
