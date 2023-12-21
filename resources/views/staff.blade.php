@extends('layouts.app')
@section('section_title' , 'breadcrumb about staff')
@section('breadcrumb')
    <div class="breadcrumb-title">
        <h4></h4>
    </div>
@stop
@section('content')

    <section id="staff" class="inside">
        <div class="container-fluid">
            <div class="title">
                <h2>   </h2>
            </div>
            <div class="row" style="flex-direction: column;justify-content: center;align-items: center;">
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

            </div>
        </div>
    </section>
@stop
