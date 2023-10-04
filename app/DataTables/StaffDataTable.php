<?php

namespace App\DataTables;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StaffDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', '
                <a href="javascript:void(0)" data-container=".view_modal" data-href="{{route("admin.staff.edit" , $id)}}"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-modal">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                        </svg>
                    </span>
                </a>
                <a data-table="#staff-table" href="javascript:void(0)" data-href="{{route("admin.staff.destroy" , $id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-option">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                        </svg>
                    </span>
                </a>')
            ->editColumn('status' , function ($row) {
                if($row->status == 1) {
                    return '<span class="badge badge-light-success">مفعل</span>';
                }else{
                    return '<span class="badge badge-light-danger">غير مفعل</span>';
                }
            })
            ->editColumn('image' , function ($row) {
                if(!empty($row->image)) {
                    return '<img src="'. asset($row->image) .'" width="50px">';
                }
            })
            ->editColumn('public' , function ($row) {
                if($row->public == 1) {
                    return '<span class="badge badge-light-success">مفعل</span>';
                }else{
                    return null;
                }
            })
            ->rawColumns(['status' , 'action' , 'image' , 'public'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Service $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Staff $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('staff-table')
            ->columns($this->getColumns())
            ->addTableClass('table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3')
            ->minifiedAjax()
            //->dom('<"row margin-bottom-20 text-center margin-none"<"col-sm-2"l><"col-sm-7"B><"col-sm-3"f> r>tip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                //Button::make('excel')->addClass('btn btn-outline--primary')->text('<img style="margin-left: 7px;" width="14" src="'. asset('assets/back-end/img/excel.png') .'" alt=""> Excel')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->title('الاجراءات'),
            Column::make('id')->title('#'),
            Column::make('image')->title('الصورة'),
            Column::make(prefix_lang('name' , 'name' , true))->title('الخدمة'),
            Column::make('name_en')->title('الخدمة بالانجليزي'),
            Column::make('order')->title('الترتيب'),
            Column::make('status')->title('الحالة'),
            Column::make('public')->title('نشر')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Service_' . date('YmdHis');
    }
}
