<?php

namespace App\Http\Controllers;

use App\Exceptions\PermissionDeniedException;
use App\Traits\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests , Helper;

    public function CheckPermission($name , $guard = 'web') {
        if(request()->ajax() AND !auth()->user()->can($name , $guard)) {
            throw new PermissionDeniedException();
        }
        abort_if(!auth()->user()->can($name , $guard) , 403 , 'You are not authorized');
    }

    public function respondWithError($message = null)
    {
        return response()->json(
            ['success' => false, 'msg' => $message]
        );
    }

    public function respondSuccess($message = null, $additional_data = [])
    {
        $message = is_null($message) ? __('lang_v.success') : $message;
        $data = ['success' => true, 'msg' => $message];

        if (!empty($additional_data)) {
            $data = array_merge($data, $additional_data);
        }

        return $this->respond($data);
    }

    public function respond($data)
    {
        return response()->json($data);
    }

    public function updateImageModal($modal, $request  , $name  , $path , $delete = true , $delete_only = false) {
        if($delete_only) {
           return File::delete($modal->{$name});
        }
        if($request->hasFile($name)) {
            $image = $modal->{$name};
            $modal->{$name} = $this->Upload($request , $name , $path);
            $modal->save();
            if($delete) {
                File::delete($image);
            }
        }

    }
}
