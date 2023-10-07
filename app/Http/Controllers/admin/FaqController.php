<?php

namespace App\Http\Controllers\admin;

use App\DataTables\FaqDataTable;
use App\DataTables\StaffDataTable;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FaqDataTable $dataTable)
    {
        $this->CheckPermission('faq.index');
        return $dataTable->render('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('faq.create');
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('faq.create');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'order' => 'required',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
        ]);

        DB::beginTransaction();
        try {
            $insert = Faq::create($validate);
            DB::commit();
            return $this->respondSuccess('تم اضافة سوال بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $this->CheckPermission('faq.edit');
        return view('admin.faq.edit' , compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $this->CheckPermission('faq.edit');
        $validate = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'order' => 'required',
            'description_ar' => 'nullable',
            'description_en' => 'nullable',
        ]);

        DB::beginTransaction();
        try {
            $faq->update($validate);
            DB::commit();
            return $this->respondSuccess('تم تحديث سوال بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        DB::beginTransaction();
        try {
            $faq->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف سوال بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
