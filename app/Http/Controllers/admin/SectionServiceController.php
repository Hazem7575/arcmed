<?php

namespace App\Http\Controllers\admin;

use App\DataTables\SectionServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\SectionService;
use App\Models\Service;
use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SectionServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SectionServiceDataTable $dataTable)
    {
        $this->CheckPermission('sectionService.index');
        $title = 'اقسام الخدمات';
        if(\request()->type == 2) {
            $title = 'الاجهزة والادوات';
        }
        return $dataTable->render('admin.services.sections.index'  , compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('sectionService.create');
        $title = 'اضافة خدمة جديدة';
        if(\request()->type == 2) {
            $title = 'اضافة جهاز جديد';
        }
        $services = Service::where('status' , 1)->select(prefix_lang('name' , 'name'), 'id')->pluck('name' , 'id');
        return view('admin.services.sections.create' , compact('services'  , 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('sectionService.create');
        $validate = $request->validate([
            'service_id' => 'required',
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'public' => 'required',
            'description_ar' => 'required',
            'description_en' => 'nullable',
            'order' => 'nullable',
            'type' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            if($request->hasFile('image')) {
                $validate['image'] = $this->Upload($request , 'image' , 'uploads/section_services');
            }
            SectionService::create($validate);
            DB::commit();
            return $this->respondSuccess('تم اضافة القسم بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionService  $sectionService
     * @return \Illuminate\Http\Response
     */
    public function show(SectionService $sectionService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionService  $sectionService
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionService $sectionService)
    {
        $this->CheckPermission('sectionService.edit');
        $services = Service::where('status' , 1)->select(prefix_lang('name' , 'name'), 'id')->pluck('name' , 'id');
        return view('admin.services.sections.edit' , compact('sectionService' , 'services'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionService  $sectionService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionService $sectionService)
    {
        $this->CheckPermission('sectionService.edit');
        $validate = $request->validate([
            'service_id' => 'required',
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'public' => 'required',
            'description_ar' => 'required',
            'description_en' => 'nullable',
            'order' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            $image = $sectionService->image;
            $insert = $sectionService->update($validate);
            $this->updateImageModal($sectionService , $request , 'image' , 'uploads/section_services' , true);
            DB::commit();
            return $this->respondSuccess('تم تحديث القسم بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionService  $sectionService
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionService $sectionService)
    {
        $this->CheckPermission('sectionService.destroy');
        DB::beginTransaction();
        try {
            $this->updateImageModal($sectionService , null , 'image' , false , false , true);
            $sectionService->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف القسم بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
