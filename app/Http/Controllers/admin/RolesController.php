<?php

namespace App\Http\Controllers\admin;

use App\DataTables\RoleDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleDataTable $dataTable)
    {
        $this->CheckPermission('role');
        return $dataTable->render('admin.users.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('role_add');
        $permissions = Permission::whereNotNull('group')
            ->get()->mapToGroups(function ($item) {
                return [$item['group'] => $item];
            });

        return view('admin.users.role.create' , compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('role_add');
        $request->validate([
           'name' => 'required|unique:roles,name',
        ]);
        DB::beginTransaction();
        try {
            $role = Role::create([
                'name'=> $request->name,
                'guard_name' => 'admin',
            ]);
            $role->syncPermissions($request->permissions);
            DB::commit();
            return RedirectSuccess(route('admin.role.index') , 'تم اضافة الوظيفة بنجاح' , $request->ajax());
        }catch (\Exception $exception) {
            DB::rollBack();
            return RedirectError($exception->getMessage(), $request->ajax());
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
        $this->CheckPermission('role_edit');
        $role = Role::findOrFail($id);
        $permissions = Permission::whereNotNull('group')
            ->get()->mapToGroups(function ($item) {
                return [$item['group'] => $item];
            });
        $has = DB::table('role_has_permissions')->where('role_id' , $role->id)->get()->pluck('permission_id');

        $listHas = collect($has)->toArray();

        return view('admin.users.role.edit' , compact('permissions' ,  'role' , 'listHas'));
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
        $this->CheckPermission('role_edit');
        $request->validate([
            'name' => 'required',
        ]);
        $role = Role::findOrFail($id);

        DB::beginTransaction();
        try {
            $role->update([
                'name'=> $request->name,
            ]);
            $role->syncPermissions($request->permissions);
            DB::commit();
            return RedirectSuccess(route('admin.role.index') , 'تم اضافة الوظيفة بنجاح' , $request->ajax());
        }catch (\Exception $exception) {
            DB::rollBack();
            return RedirectError($exception->getMessage(), $request->ajax());
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
        $this->CheckPermission('role_delete');
        DB::beginTransaction();
        try {
            $role = Role::findOrFail($id);
            activity()->log("قام  بحذف وظيفة $role->name");
            $role->delete();
            DB::commit();
            return $this->respondSuccess('تم حذف الوظيفة بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
