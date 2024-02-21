@extends('layouts.app')
@section('section_title' , 'breadcrumb about-dem')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{$title}} </h4>
    </div>
@stop
@section('content')
    @if(isset($type))
    <style>
        .box-category .image img {
            width: 150px;
            height: 150px;
            text-align: center;
            margin: auto;
            display: block;
            border-radius: 15px;
        }
        #section-services .box-category .image {
            height: 150px;
        }
        .box-category h1 {
            text-align: center;
        }
    </style>
    @endif
    <section id="section-services">
        <div class="container-fluid">
            <div class="row">
<!--                @foreach($service_all as $section)-->
<!--                <div class="col-sm-12 col-md-6 col-lg-3">-->
<!--                    <a href="javascript:void(0)">-->
<!--                        <div class="box-category" style="height: 300px;justify-content: center;">-->
<!--                            <div class="image">-->
<!--                                <img src="{{asset($section->image)}}" alt="">-->
<!--                            </div>-->
<!--                            <h1>{{ $section->name_ar }}</h1>-->
<!--                            <h1>{{ $section->name_en }}</h1>-->
<!--{{--                            <span>{{ $section->{prefix_lang('description' , 'description' , true)} }}</span>--}}-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--                @endforeach-->
            </div>
        </div>
    </section>
@stop
