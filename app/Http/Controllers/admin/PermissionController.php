<?php

namespace App\Http\Controllers\admin;

use App\DataTables\PermissionDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PermissionDataTable $dataTable)
    {
        $this->CheckPermission('permission');
        return $dataTable->render('admin.users.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->checkPermission('permission_create');
        $groups = Permission::orderBy('id' , 'desc')->whereNotNull('group')->pluck('group' , 'group');
        return view('admin.users.permission.create' , compact('groups'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->checkPermission('permission_create');
        DB::beginTransaction();
        try {
            $request->validate([
                'name' => 'required',
                'alias' => 'required',
            ]);
            $data = collect($request)->except('_token');
            $data['guard_name'] =  'admin';
            Permission::create($data->all());

            DB::commit();
            return response()->json(['success' => true , 'msg' => 'تم الاضافة بنجاح']);
        }catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['success' => false , 'msg' => $exception->getMessage()]);
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
    public function edit($id)
    {
        $this->checkPermission('permission_edit');
        $permission = Permission::findOrFail($id);
        $groups = Permission::whereNotNull('group')->pluck('group' , 'group');
        return view('admin.users.permission.edit' , compact( 'permission' , 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->checkPermission('permission_edit');
        DB::beginTransaction();
        try {
            $request->validate([
                'alias' => 'required'
            ]);
            $permission = Permission::findOrFail($id);
            $data = collect($request)->except('_token' , '_method');
            $permission->update($data->all());
            DB::commit();
            return response()->json(['success' => true , 'msg' => 'تم التحديث بنجاح']);
        }catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['success' => false , 'msg' => $exception->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->CheckPermission('permission_delete');
        DB::beginTransaction();
        try {
            $permission = Permission::findOrFail($id);
            $permission->delete();
            DB::commit();
            return response()->json(['success' => true , 'msg' => 'تم الحذف بنجاح']);
        }catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['success' => false , 'msg' => $exception->getMessage()]);
        }
    }
}
