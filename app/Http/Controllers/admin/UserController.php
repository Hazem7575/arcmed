<?php

namespace App\Http\Controllers\admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\TranslationLoader\LanguageLine;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable)
    {
        $this->CheckPermission('user.index');
        return $dataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->CheckPermission('user.create');
        $role = Role::get()->pluck('name' , 'id');
        return view('admin.users.create' , compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->CheckPermission('user.create');
        $request->validate([
            'name' => 'required|unique:users,name',
            'email' => 'unique:users,email',
            'password' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $data = collect($request)->only('name' , 'email', 'phone' , 'password');
            $data['password'] = Hash::make($request->password);

            $create = User::create($data->all());
            if(!empty($request->job)) {
                $role = Role::find($request->job);
                $create->syncRoles($role->name);
            }else{
                $create->syncRoles([]);
            }
            DB::commit();
            return $this->respondSuccess("تم  اضافة المستخدم بنجاح");
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
    public function edit(User $user)
    {
        $this->CheckPermission('user.edit');
        $role = Role::get()->pluck('name' , 'id');
        return view('admin.users.edit' , compact('role' , 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->CheckPermission('user.edit');
        $request->validate([
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'unique:users,email,' . $user->id
        ]);
        DB::beginTransaction();
        try {
            $data = collect($request)->only('name' , 'email', 'phone');
            if(!empty($request->password)) {
                $data['password'] = Hash::make($request->password);
            }

            if(!empty($request->job)) {
                $role = Role::find($request->job);
                $user->syncRoles($role->name);
            }else{
                $user->syncRoles([]);
            }
            $user->update($data->all());
            DB::commit();
            return $this->respondSuccess("تم تحديث المستخدم بنجاح");
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
    public function destroy(User $user)
    {
        $this->CheckPermission('user.destroy');
        DB::beginTransaction();
        try {
            $user->delete();
            DB::commit();
            return $this->respondSuccess("تم  حذف المستخدم بنجاح");
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
