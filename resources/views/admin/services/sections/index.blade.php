@extends('admin.layouts.app')
@section('title' , 'جميع اقسام الخدمات')
@section('content')

    <div class="d-flex flex-column flex-column-fluid mt-4">
        @component('admin.components.widgets' , ['title' => $title , 'small' => 'جميع ' . $title])
            @slot('button')


                <a href="javascript:void(0)" data-container=".view_modal" data-href="{{route('admin.sectionService.create' , ['type' => request()->type])}}" class="btn btn-sm btn-light-primary btn-modal">
                  <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    اضافة  جديد
                </a>
            @endslot

            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        @endcomponent
    </div>
@stop
@section('script')
    {{ $dataTable->ajax([
       'url' => route('admin.sectionService.index' , ['type' => request()->type]),
       'data' => 'function(d) {
       }',
   ])->scripts(attributes: ['type' => 'module' ]) }}

@endsection

