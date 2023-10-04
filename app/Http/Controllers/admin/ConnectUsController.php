<?php

namespace App\Http\Controllers\admin;

use App\DataTables\ConnectUsDataTable;
use App\Http\Controllers\Controller;
use App\Models\ConnectUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConnectUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ConnectUsDataTable $dataTable)
    {
        $this->CheckPermission('connect.index');
        return $dataTable->render('admin.connect.index');
    }

    public function show($connect)
    {
        $this->CheckPermission('connect.show');
        $connectUs = ConnectUs::findOrFail($connect);
        return view('admin.connect.show' , compact('connectUs'));
    }

    public function destroy(ConnectUs $connectUs)
    {
        $this->CheckPermission('connect.destroy');
        DB::beginTransaction();
        try {
            $connectUs->delete();
            DB::commit();
            return $this->respondSuccess('تم الحذف بنجاح');
        }catch (\Exception $exception) {
            DB::rollBack();
            return $this->respondWithError($exception->getMessage());
        }
    }
}
