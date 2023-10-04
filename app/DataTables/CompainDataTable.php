<?php

namespace App\DataTables;

use App\Models\Compain;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CompainDataTable extends DataTable
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
                @can("compain.show")
                <a href="javascript:void(0)" data-container=".view_modal" data-href="{{route("admin.compain.show" , $id)}}"  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-modal">
                    <span class="svg-icon svg-icon-3">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" fill="currentColor" stroke-width="1.5"></path> <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" fill="currentColor" stroke-width="1.5"></path> </g></svg>
                    </span>
                </a>
                @endcan
                @can("compain.destroy")
                <a data-table="#compain-table" href="javascript:void(0)" data-href="{{route("admin.compain.destroy" , $id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-option">
                    <span class="svg-icon svg-icon-3">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                        </svg>
                    </span>
                </a>
                @endcan
                ')
            ->editColumn('created_at' , function ($row) {
                return $row->created_at;
            })
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\SectionService $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Compain $model): QueryBuilder
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
            ->setTableId('compain-table')
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
            Column::make('name')->title('الاسم كامل'),
            Column::make('email')->title('البريد'),
            Column::make('phone')->title('الهاتف'),
            Column::make('specialization')->title('نوع التذكرة'),
            Column::make('created_at')->title('تاريخ الارسال'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Compain_' . date('YmdHis');
    }
}
