<?php

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
    if($for_as) {
        return $name.'_'.$lang;
    }
    return $name.'_'.$lang.' as '. $as;
}
