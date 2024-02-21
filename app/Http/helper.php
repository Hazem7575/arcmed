<?php

use Illuminate\Support\Facades\Cache;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

function ExtandController() {
    return new \App\Http\Controllers\Controller();
}
function RedirectSuccess($route , $msg , $json = false , $back = false)  {
    if($back)
        return back();

    if($json) {
        return ExtandController()->respondSuccess($msg);
    }
    toastr()->success($msg);
    return to_route($route)->with('status' , ['success' => 1, 'msg' => $msg]);
}
function RedirectError($msg = null, $json = false) {
    if($json) {
        return ExtandController()->respondWithError($msg);
    }
    toastr()->error($msg);
    return redirect()->back()->with('status' , ['success' => 1, 'msg' => $msg]);
}

function prefix_lang($name , $as , $for_as = false) {
    $lang = LaravelLocalization::getCurrentLocale();
    if(request()->segment(1) == 'admin') {
        $lang = 'ar';
    }
    if($for_as) {
        return $name.'_'.$lang;
    }
    return $name.'_'.$lang.' as '. $as;
}
function setting($key,$value = null) {
    $key_setting = 'setting_'.$key;
    if(!Cache::has($key_setting)) {
        $data_website = \App\Models\Setting::where('key' , $key)->first();
        Cache::put('setting_'.$key , $data_website);
    }
    $website = Cache::get('setting_'.$key);

    if($website)
        if(is_null($value))
            return $website->data;
        else
            return $website->data->{$value} ?? null;
    else
        return null;
}
