<?php

namespace App\Http\Controllers;

use App\Mail\MailContect;
use App\Models\Clinics;
use App\Models\Compain;
use App\Models\ConnectUs;
use App\Models\Faq;
use App\Models\Section;
use App\Models\SectionService;
use App\Models\Service;
use App\Models\Staff;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index() {



        $sliders = Section::where('key' , 'slider')->select('image' , 'id' , prefix_lang('text->title' , 'title') ,  prefix_lang('text->content' , 'content'))->get();
        $services = SectionService::where('status' , 1)->where('type' , 2)->where('public' , 1)->select('image' , 'id' , 'name_ar' , 'name_en' ,  prefix_lang('description' , 'description'))->get();
        $clinics = Clinics::where('status' , 1)->select('id' , 'image' , prefix_lang('description' , 'description') , prefix_lang('name' , 'name'))->orderBy('order')->take(6)->get();
        return view('welcome' , compact('sliders' , 'services' , 'clinics'));
    }

    public function about() {
        $staffs = Staff::where('status' , 1)->where('public' , 1)->select('image' , 'id' , prefix_lang('name' , 'name') ,  prefix_lang('specialty' , 'specialty'))->orderBy('order')->take(10)->get();
        return view('about' , compact('staffs'));
    }

    public function department() {
        $clinics = Clinics::where('status' , 1)->select('id' , 'image' , prefix_lang('description' , 'description') , prefix_lang('name' , 'name'))->orderBy('order')->get();
        return view('Department' , compact('clinics'));
    }

    public function services() {
        $service_all = SectionService::where('type' , 1)->get();
        $title = 'خدماتنا';
        return view('services' , compact('service_all' , 'title'));
    }

    public function devices() {
        $service_all = SectionService::where('type' , 2)->get();
        $title = 'الاجهزة والادوات';
        $type = true;
        return view('services' , compact('service_all' , 'title' , 'type'));
    }

    public function doctors() {
        $staffs = Staff::where('status' , 1)->where('public' , 1)->select('image' , 'id' , prefix_lang('name' , 'name') ,  prefix_lang('specialty' , 'specialty'))->orderBy('order')->get();
        return view('staff' , compact('staffs'));
    }

    public function gallery() {
        return view('Gallery');
    }

    public function contact() {
        return view('Contact');
    }

    public function contact_store(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
        ]);

       DB::beginTransaction();
        try {
            $contact = ConnectUs::create($validate);
            DB::commit();
            Mail::to(env('MAILADMIN'))->send(new MailContect($validate));
        }catch (\Exception $exception) {
           DB::rollBack();
           return $exception->getMessage();
        }

        return back()->with(['success' => 'تم ارسال الرسالة بنجاح']);
    }

    public function compain_store(Request $request) {
        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'content' => 'required',
            'specialization' => 'required',
        ]);

       DB::beginTransaction();
        try {
            $contact = Compain::create($validate);
            DB::commit();
            Mail::to(env('MAILADMIN'))->send(new MailContect($validate));
        }catch (\Exception $exception) {
           DB::rollBack();
        }

        return back()->with(['success' => 'تم ارسال الشكوي بنجاح']);
    }

    public function compain() {
        return view('compain');
    }


    public function NotFound() {
        return 'false';
    }

    public function clinic(Clinics $clinic) {
        return view('show.clinic' , compact('clinic'));
    }

    public function staff_show(Staff $staff) {
        return view('show.staff' , compact('staff'));
    }

    public function education() {
        $educations = Faq::select(prefix_lang('name' , 'name') , 'id' , prefix_lang('description' , 'description'))->where('status' , 1)->orderBy('order')->get();
        return view('education' , compact('educations'));
    }
}
