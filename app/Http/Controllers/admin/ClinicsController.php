<?php

namespace App\Http\Controllers\admin;

use App\DataTables\ClinicDataTable;
use App\Http\Controllers\Controller;
use App\Models\Clinics;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClinicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ClinicDataTable $dataTable)
    {
        $this->CheckPermission('clinics.index');
        return $dataTable->render('admin.clinics.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('clinics.create');
        return view('admin.clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('clinics.create');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'order' => 'nullable',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            if($request->hasFile('image')) {
                $validate['image'] = $this->Upload($request , 'image' , 'uploads/clinics');
            }
            $insert = Clinics::create($validate);
            DB::commit();
            return $this->respondSuccess('تم اضافة العيادة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clinics  $clinics
     * @return \Illuminate\Http\Response
     */
    public function show(Clinics $clinics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clinics  $clinics
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinics $clinic)
    {
        $this->CheckPermission('clinics.edit');
        return view('admin.clinics.edit' , compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clinics  $clinics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinics $clinic)
    {
        $this->CheckPermission('clinics.edit');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'nullable',
            'status' => 'required',
            'order' => 'nullable',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
            'image' => 'file|mimes:' . implode(',' , config('setting.files_type')),
        ]);

        DB::beginTransaction();
        try {
            $clinic->update($validate);
            $this->updateImageModal($clinic , $request , 'image' , 'uploads/clinics');
            DB::commit();
            return $this->respondSuccess('تم تحديث العيادة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clinics  $clinics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinics $clinics)
    {
        //
    }
}
