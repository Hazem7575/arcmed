@extends('layouts.app')
@section('section_title' , 'breadcrumb about-d')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{__("home.Sections")}} </h4>
    </div>
@stop
@section('content')
    <style>
        #section-services .box-category {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        #section-services .box-category .image {
            width: 85px;
            height: 85px;
            background: #30a5ff;
            padding: 15px;
            border-radius: 50%;
            text-align: center;
            margin: auto;
        }
        #section-services .box-category .image img {
            width: 100px;
            height: 50px;
            object-fit: contain;
        }
        #section-services .box-category h1 {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
    <!--------------------------------- Service Section Start ------------------------------------>
    <section id="section-services" class="department">
        <div class="container-fluid">
            <div class="row">
                @foreach($clinics as $clinic)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#">
                        <div class="box-category">
                            <div class="image">
                                <img src="{{asset($clinic->image)}}" alt="">
                            </div>
                            <h1>
                                {{$clinic->name}}
                            </h1>
                            <p>{{\Illuminate\Support\Str::limit(strip_tags($clinic->description) , 200 , '...')}}</p>
                            <a href="javascript:void(0)" data-href="{{route('clinic' , $clinic->id)}}"  data-title="{{$clinic->name}}" class="modal-button btn-read-more">{{__("home.Read more")}}</a>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------------------------------- Service Section End ------------------------------------>
@stop
