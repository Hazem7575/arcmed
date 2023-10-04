@extends('admin.layouts.app')
@section('title' , 'جميع رسائل التواصل')
@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-4">
        @component('admin.components.widgets' , ['title' => 'رسائل التواصل' , 'small' => 'جميع رسائل التواصل'])
            @slot('button')@endslot
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
        @endcomponent
    </div>
@stop
@section('script')
    {{ $dataTable->scripts(attributes: ['type' => 'module' ]) }}
@endsection

