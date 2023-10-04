@extends('admin.layouts.app')
@section('title' , 'جميع الشكاوي')
@section('content')

    <div class="d-flex flex-column flex-column-fluid mt-4">
        @component('admin.components.widgets' , ['title' => 'الشكاوي' , 'small' => 'جميع  الشكاوي'])
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

