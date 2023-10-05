@extends('layouts.app')
@section('section_title' , 'breadcrumb')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{__("home.who are we")}} </h4>
    </div>
@stop
@section('content')
    <!--------------------------------- About Section Start ------------------------------------>
    <section id="about-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="title">
                        <h2> {{__("home.about us")}} </h2>
                        <h3> {{__("home.Who we are and where we started")}} </h3>
                        <p>
                            {{__("home.about page title")}}
                        </p>
                    </div>
                    <ul>
                        <li>
                            <img src="{{asset('assets/img/Icons/team.png')}}" alt="">
                            {{__("home.An integrated and distinguished team for your treatment")}}
                        </li>
                        <li>
                            <img src="{{asset('assets/img/Icons/mus.png')}}" alt="">
                            {{__("home.Treating all types of pain in a natural way")}}
                        </li>
                        <li>
                            <img src="{{asset('assets/img/Icons/stethoscope.png')}}" alt="">
                            {{__("home.An integrated and distinguished team for your treatment 2")}}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 left" >
                    <div class="about-img">
                        <img src="{{asset('assets/img/about/s1.webp')}}">
                    </div>
                    <img class="about-icon" src="{{asset('assets/img/Icons/youtube.png')}}">
                </div>
            </div>

        </div>
        <div class="bottom">
            <div class="container-fluid">
                <div class="title">
                    <h2> {{__("home.Why us")}} </h2>
                    <h3> {{__("home.We treat all pain using natural methods. We have a large and distinguished medical team")}} </h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assets/img/Icons/team.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h5>
                                    {{__("home.My patients are happy number")}}
                                </h5>
                                <p>
                                    {{__("home.My patients are happy")}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assets/img/Icons/mus.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h5>
                                    {{__("home.Years of experience number")}}
                                </h5>
                                <p>
                                    {{__("home.Years of experience")}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assets/img/Icons/team.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h5>
                                    {{__("home.Qualified doctors number")}}
                                </h5>
                                <p>
                                    {{__("home.Qualified doctors")}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{asset('assets/img/Icons/team.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <h5>
                                    {{__("home.Departments clinics number")}}
                                </h5>
                                <p>
                                    {{__("home.Departments clinics")}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- About Section End ------------------------------------>
    <!--------------------------------- About Section Start ------------------------------------>
    <section id="mission">
        <div class="container-fluid">
            <div class="title">
                <h2> {{__("home.Committed to excellence")}} </h2>
                <h3> {{__("home.With every patient, in every encounter, every time.")}} </h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/about/mis.webp')}}">
                        </div>
                        <div class="card-body">
                            <p>
                                {{__("home.title about section 1")}}
                            </p>
                            <h5>
                                {{__("home.Our mission")}}
                                <img class="plus" src="{{asset('assets/img/Icons/plus-w.png')}}" alt="" width="20">
                                <img class="min" src="{{asset('assets/img/Icons/minus.png')}}" alt="" width="20">
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/about/vis.webp')}}">
                        </div>
                        <div class="card-body">
                            <p>
                                {{__("home.title about section 2")}}
                            </p>
                            <h5>
                                {{__("home.Our vision")}}
                                <img class="plus" src="{{asset('assets/img/Icons/plus-w.png')}}" alt="" width="20">
                                <img class="min" src="{{asset('assets/img/Icons/minus.png')}}" alt="" width="20">
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/about/val.webp')}}">
                        </div>
                        <div class="card-body">
                            <p>
                                {{__("home.title about section 3")}}
                            </p>
                            <h5>
                                {{__("home.rate us")}}
                                <img class="plus" src="{{asset('assets/img/Icons/plus-w.png')}}" alt="" width="20">
                                <img class="min" src="{{asset('assets/img/Icons/minus.png')}}" alt="" width="20">
                            </h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- About Section End ------------------------------------>
    <!--------------------------------- About Department Section Start ------------------------------------>
    <section id="depart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="depart-img">
                        <img src="{{asset('assets/img/about/about2.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="depart-content">
                        <div class="title">
                            <h2>  {{__("home.What is the specialty of physical therapy?")}} </h2>
                            <h3>  {{__("home.A general idea about the specialty of physical therapy and rehabilitation")}}</h3>
                            <p>
                                {{__("home.section title about 5")}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- About Department Section End ------------------------------------>
    <!--------------------------------- About staff Section Start ------------------------------------>
    @if($staffs->count() > 0)
    <section id="staff">
        <div class="container-fluid">
            <div class="title">
                <h2>  {{__("home.Our health staff")}} </h2>
            </div>
            <div class="row">
                @foreach($staffs as $staff)
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset($staff->image)}}" alt="">
                        </div>
                        <div class="card-body">
                            <h5>
                                {{$staff->name}}
                            </h5>
                            <p>
                                {{$staff->specialty}}
                            </p>
                            <a href="javascript:void(0)" data-href="{{route('staff.show' , $staff->id)}}" data-title="{{$staff->name}}" class="modal-button">
                                {{__("home.Read about the doctor")}}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-12">
                    <div class="more-btn">
                        <a class="btn" href="{{route('doctors')}}">
                            {{__("home.See all staff")}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--------------------------------- About staff Section End ------------------------------------>
    <style>
        .about-footer {
            background-color: #EAF6FF;
        }
    </style>
@stop
@section('footer_class' , 'about-footer')