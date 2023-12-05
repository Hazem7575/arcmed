@extends('layouts.app')
@section('section_title' , 'breadcrumb about-dem')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{$title}} </h4>
    </div>
@stop
@section('content')
    <section id="section-services">
        <div class="container-fluid">
            <div class="row">
                @foreach($service_all as $section)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="javascript:void(0)">
                        <div class="box-category">
                            <div class="image">
                                <img src="{{asset($section->image)}}" alt="">
                            </div>
                            <h1>{{ $section->{prefix_lang('name' , 'name' , true)} }}</h1>
                            <span>{{ $section->{prefix_lang('description' , 'description' , true)} }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
