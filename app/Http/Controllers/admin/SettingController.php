<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class SettingController extends Controller
{
    use Helper;
    public function index() {
        $this->CheckPermission('setting.update');
        return view('admin.setting.index');
    }
    public function update(Request $request)
    {
        $this->CheckPermission('setting.update');
        try {
            foreach ($request->setting as $key => $row) {
                $website = Setting::where('key' , $key)->first();
                if($website) {
                    $website->data = $row;
                    $website->save();
                }else{
                    $website = Setting::create([
                        'key' => $key,
                        'data' => $row
                    ]);
                }
                Cache::put('setting_'. $key , $website);
            }

            toastr()->success('Done Updated');
            return redirect()->back();
        }catch (Exception $exception) {
            toastr()->error($exception->getMessage());
            return redirect()->back();
        }
    }


}
