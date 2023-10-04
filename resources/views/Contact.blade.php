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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463877.3124261437!2d46.49288500762649!3d24.725455373348634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1695627420220!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
