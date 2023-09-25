<?php

namespace App\Http\Controllers;

use App\Exceptions\PermissionDeniedException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

}
