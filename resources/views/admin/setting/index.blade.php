@extends('admin.layouts.app')
@section('title' , 'Setting')
@section('content')
    <div class="d-flex flex-column flex-column-fluid mt-4">
        {!! Form::open(['url' => route('admin.setting.update') , 'method' => 'post']) !!}
        @component('admin.components.widgets' , ['title' => 'الاعدادت' , 'small' => 'جميع الاعدادت '])
            @slot('button')@endslot

            <div class="row" style="border-top: 1px solid rgba(0,0,0,0.08);padding-top: 15px;">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description]', setting('app' , 'description') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords]',setting('app' , 'keywords') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>


                <div class="clearfix"></div>

            </div>
            <div class="col-md-12">
                <hr style="color: #0e0e0e21;">
            </div>

            <div class="col-md-12">
                <div class="modal-footer flex-center">
                    <button type="submit"  class="btn btn-primary save_load">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Loading ....<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        @endcomponent
        {!! Form::close() !!}
    </div>
@stop

