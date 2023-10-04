@extends('layouts.app')
@section('section_title' , 'breadcrumb about')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4> {{__("home.Feedback and complaints")}}</h4>
    </div>
@stop
@section('content')

    <!--------------------------------- Contact Section Start ------------------------------------>
    <section id="contact" class="compian">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-content">
                        <div class="title">
                            <h2> {{__("home.Fields marked with an asterisk are mandatory*")}} </h2>
                        </div>
                        <form action="{{route('compain.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                    <label for="exampleInputText1">
                                        {{__("home.Choose (Remark / Complaint)")}} <span>*</span>
                                    </label>
                                    <div class="input-group">
                                        <i class="fa-solid fa-chevron-down"></i>
                                        <select class="form-control custom-select" name="specialization" id="inputGroupSelect01">
                                            <option selected>
                                                {{__("home.note")}}
                                            </option>
                                            <option value="استفسار عاجل">{{__("home.Urgent inquiry")}}</option>
                                            <option value="حجز موعد">{{__("home.Appointment Booking")}}</option>
                                            <option value="تقديم شكوي">{{__("home.Make a complaint")}}</option>
                                            <option value="اخطار بمشكله">{{__("home.Notification of a problem")}}</option>
                                            <option value="حجز مستعجل">{{__("home.Urgent booking")}}</option>
                                            <option value="اخري">{{__("home.Another")}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                    <label for="exampleInputText1">
                                        {{__("home.Enter name here")}} <span>*</span>
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="exampleInputText1">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                    <label for="exampleInputEmail1">
                                        {{__("home.E-mail")}}<span>*</span>
                                    </label>
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-sm-12 col-md-6 col-lg-4">
                                    <label for="exampleInputphone">
                                        {{__("home.Mobile number")}}<span>*</span>
                                    </label>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="exampleInputphone">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                    <label for="exampleInputphone">
                                        {{__("home.Message text")}}
                                    </label>
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{old('content')}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{__("home.send")}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------- Contact Section End ------------------------------------>
@stop
