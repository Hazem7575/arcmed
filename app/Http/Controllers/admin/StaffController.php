<?php

namespace App\Http\Controllers\admin;

use App\DataTables\StaffDataTable;
use App\Http\Controllers\Controller;
use App\Models\SectionService;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StaffDataTable $dataTable)
    {
        $this->CheckPermission('staff.index');
        return $dataTable->render('admin.staff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('staff.create');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'public' => 'required',
            'description_ar' => 'required',
            'description_en' => 'nullable',
            'order' => 'nullable',
            'specialty_ar' => 'nullable',
            'specialty_en' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            if($request->hasFile('image')) {
                $validate['image'] = $this->Upload($request , 'image' , 'uploads/staff');
            }
            $insert = Staff::create($validate);
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
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $this->CheckPermission('staff.edit');
        return view('admin.staff.edit' , compact('staff'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $this->CheckPermission('staff.edit');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'public' => 'required',
            'description_ar' => 'required',
            'description_en' => 'nullable',
            'order' => 'nullable',
            'specialty_ar' => 'nullable',
            'specialty_en' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            $staff->update($validate);
            $this->updateImageModal($staff , $request , 'image' , 'uploads/staff');
            DB::commit();
            return $this->respondSuccess('تم حذف الطبيب بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $this->CheckPermission('staff.destroy');
        DB::beginTransaction();
        try {
            $this->updateImageModal($staff , null , 'image' , false , false , true);
            $staff->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف الطبيب بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
