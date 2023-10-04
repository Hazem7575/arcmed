<?php

namespace App\Http\Controllers\admin;

use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    use Helper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceDataTable $dataTable)
    {
        $this->CheckPermission('services.index');
        return $dataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('services.create');
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('services.create');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'order' => 'required',
            'background' => 'nullable|file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            if($request->hasFile('background')) {
                $validate['background'] = $this->Upload($request , 'background' , 'uploads/services');
            }
            $insert = Service::create($validate);
            DB::commit();
            return $this->respondSuccess('تم اضافة الخدمة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->CheckPermission('services.edit');
        return view('admin.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->CheckPermission('services.edit');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'order' => 'required',
            'background' => 'nullable|file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            if($request->hasFile('background')) {
                if(!empty($service->background))
                    File::delete($service->background);

                $validate['background'] = $this->Upload($request , 'background' , 'uploads/services');
            }
            $insert = $service->update($validate);
            DB::commit();
            return $this->respondSuccess('تم تحديث الخدمة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->CheckPermission('services.destroy');
        DB::beginTransaction();
        try {
            $service->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف الخدمة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
