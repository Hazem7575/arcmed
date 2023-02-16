<?php


namespace App\Traits;


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait Helper
{
    public function Upload(object $request ,string $key  , string $path = 'uploads')
    {
        $file = $request->file($key);
        $fileName   = time() . uniqid(9) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $fileName);
        return $path."/".$fileName;
    }
    public function UploadAll(object $request ,string $key  , string $path = 'uploads' , $diff = null)
    {
        $dataFiles = $request->{$key};

        if(!is_null($diff)) {
            $data = collect($dataFiles)->filter(function ($data) {
                return $data['status'] == 'success';
            })->pluck('name');

            $list = collect($diff)->pluck('name');
            $diffFiles = collect($list)->diff($data);
            foreach ($diffFiles as $list) {
                File::delete($path . '/'. $list);
            }
        }
        $data = [];

        foreach ($dataFiles as $key => $row) {
            $fileName   = time() . uniqid(9) . '.' . $row->getClientOriginalExtension();
            $row->move(public_path($path), $fileName);
            $data[$key]['name'] = $fileName;
            $data[$key]['url'] = asset($path."/".$fileName);
        }
        return  $data;
    }

}
