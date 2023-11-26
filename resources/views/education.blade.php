@extends('layouts.app')
@section('section_title' , 'breadcrumb about Education')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{__("home.Health Education")}} </h4>
    </div>
@stop
@section('content')
    <style>
        #section-header {
            margin-bottom: 0;
        }
        #section-header.breadcrumb.about.Education {
            background-image: url(../assets/img/bread2.webp);
            background-position: center;
        }
    </style>
    <section id="faq">
        <div class="container-fluid">
           
            <div class="row">

                <div class="col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @foreach($educations as $education)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$education->id}}" aria-expanded="false" aria-controls="flush-collapseOne{{$education->id}}">
                                    {{$education->name}}
                                    <img src="{{asset('assets/img/Icons/plus-w.png')}}">
                                </button>
                            </h2>
                            <div id="flush-collapseOne{{$education->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{$education->id}}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{!! $education->description !!}</div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>


            </div>
        </div>
    </section>
@stop
@section('footer_class' , 'about-footer')
