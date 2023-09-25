<?php

namespace App\Http\Controllers\admin;

use App\DataTables\SectionDataTable;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Traits\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Spatie\TranslationLoader\LanguageLine;
use Yajra\DataTables\Facades\DataTables;

class SectionController extends Controller
{
    use Helper;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SectionDataTable $dataTable)
    {
        $this->CheckPermission('section.index');
        return $dataTable->render('admin.section.'. request()->type .'.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('section.create');
        return view('admin.section.'. request()->type .'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('section.create');
        $request->validate([
             'key' => 'required'
         ]);

        DB::beginTransaction();
        try {
            $data = collect($request)->except('_token' , 'image' , 'fileuploader-list-image');
            if($request->hasFile('image')) {
                $data['image'] = $this->Upload($request , 'image' , 'uploads/slider');
            }

            $section = Section::create($data->all());
            DB::commit();
            toastr()->success('تم الاضافة بنجاح');
            return to_route('admin.section.index' , ['type' => $request->key]);
        }catch (\Exception $exception) {
            DB::rollBack();
            toastr()->success($exception->getMessage());
            return redirect()->back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $this->CheckPermission('section.edit');
        return view('admin.section.'. $section->key .'.edit' , compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $this->CheckPermission('section.edit');
        DB::beginTransaction();
        try {
            $data = collect($request)->except('_token' , '_method' , 'image' , 'fileuploader-list-image');
            if($request->hasFile('image')) {
                $data['image'] = $this->Upload($request , 'image' , 'uploads/slider');
                File::delete($section->image);
            }
            $section->update($data->all());
            DB::commit();
            toastr()->success('تم التحديث بنجاح');
            return to_route('admin.section.index' , ['type' => $section->key]);
        }catch (\Exception $exception) {
            DB::rollBack();
            toastr()->success($exception->getMessage());
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $this->CheckPermission('section.destroy');
        DB::beginTransaction();
        try {
            $section->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف  العنصر بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
