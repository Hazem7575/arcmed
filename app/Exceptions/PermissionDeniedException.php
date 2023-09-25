<?php

namespace App\Exceptions;

use Exception;

class PermissionDeniedException extends Exception
{
    public function render($request)
    {
        return response()->json(
            ['success' => false, 'msg' => 'You are not authorized']
        );
    }
}
