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

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][phone]' , 'phone' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::text('setting[app][phone]',setting('app' , 'phone') , ['class' => 'form-control'  , 'style' => 'width:100%'])}}
                    </div>
                </div>


                <div class="clearfix"></div>
                <div class="col-md-12" style="margin-top: 30px">
                    <h3>من نحن</h3>
                    <hr style="color: rgba(0,0,0,0.41)">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description_us]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description_us]', setting('app' , 'description_us') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords_us]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords_us]',setting('app' , 'keywords_us') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" style="margin-top: 30px">
                    <h3>الاقسام</h3>
                    <hr style="color: rgba(0,0,0,0.41)">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description_section]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description_section]', setting('app' , 'description_section') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords_section]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords_section]',setting('app' , 'keywords_section') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" style="margin-top: 30px">
                    <h3>الاجهزة</h3>
                    <hr style="color: rgba(0,0,0,0.41)">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description_devices]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description_devices]', setting('app' , 'description_devices') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords_devices]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords_devices]',setting('app' , 'keywords_devices') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" style="margin-top: 30px">
                    <h3>الكوادر</h3>
                    <hr style="color: rgba(0,0,0,0.41)">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description_doctors]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description_doctors]', setting('app' , 'description_doctors') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords_doctors]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords_doctors]',setting('app' , 'keywords_doctors') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" style="margin-top: 30px">
                    <h3>التثقيبف الطبي</h3>
                    <hr style="color: rgba(0,0,0,0.41)">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][description_education]' , 'Description' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][description_education]', setting('app' , 'description_education') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('setting[app][keywords_education]' , 'keywords' , ['class' => 'col-sm-8 col-form-label']) !!}
                        {{Form::textarea('setting[app][keywords_education]',setting('app' , 'keywords_education') , ['class' => 'form-control'  , 'style' => 'width:100%' , 'rows' => 4])}}
                    </div>
                </div>
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

