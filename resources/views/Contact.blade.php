@extends('layouts.app')
@section('section_title' , 'breadcrumb about')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4>{{__("home.Connect us")}}</h4>
    </div>
@stop
@section('content')
    <!--------------------------------- Contact Section Start ------------------------------------>
    <section id="contact">
        <div class="container-fluid">
            <div class="row">



                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-content">
                        <div class="title">
                            <h2> {{__("home.Keep in contact with us")}}</h2>
                            <h4> {{__("home.Please fill out the form below, and we will contact you as soon as possible.")}} </h4>
                        </div>
                        <form action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputText1">
                                    {{__("home.full name")}} (*)
                                </label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}"  id="exampleInputText1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    {{__("home.E-mail")}} (*)
                                </label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputphone">
                                    {{__("home.Mobile number")}} (*)
                                </label>
                                <input type="text" class="form-control" name="phone" value="{{old('phone')}}"  id="exampleInputphone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputphone">
                                    {{__("home.How can we help you?")}}
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3">{{old('content')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{__("home.send")}}</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8">
                    <div class="map">
                        <iframe src="{{__("map.map")}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/img/contact/map.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5>
                                        {{__("home.the address")}}
                                    </h5>
                                    <p>
                                        {{__("home.Saudi Arabia Riyadh")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/img/contact/phone.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5>
                                        {{__("home.Phone")}}
                                    </h5>
                                    <p>
                                        {{__("home.number_phone")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/img/contact/mail.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5>
                                        {{__("home.E-mail")}}
                                    </h5>
                                    <p>
                                        {{__("home.email-text")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- Contact Section End ------------------------------------>
@stop
