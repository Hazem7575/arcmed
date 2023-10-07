<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Clinics;
use App\Models\Compain;
use App\Models\ConnectUs;
use App\Models\Faq;
use App\Models\Section;
use App\Models\SectionService;
use App\Models\Staff;
use Illuminate\Http\Request;
use Spatie\Menu\Laravel\Facades\Menu;

class DashboardController extends Controller
{
    public function index() {
        $section = SectionService::count();
        $users = SectionService::count();
        $contacts = ConnectUs::count();
        $complaints = Compain::count();
        $infos = Faq::count();
        $clinics = Clinics::count();
        $staffs = Staff::count();
        $sliders = Section::where('key' , 'slider')->count();
        return view('admin.dashboard' , compact('section' , 'sliders' , 'users' , 'clinics' , 'staffs', 'contacts' , 'complaints' , 'infos'));
    }
}
