<div class="row">
    <div class="col-12">

        <div class="staff-content" style="padding: 20px;color: #000">
            <div class="row">
                <div class="col-md-2 col-4" style="padding-left: 0;">
                    <img src="{{asset($staff->image)}}" class="img-style-staff" alt="{{ $staff->{prefix_lang('name' , 'name' , true)} }}">
                </div>
                <div class="col-8" style="padding-right: 0;">
                    <h3 class="title-staff">{{ $staff->{prefix_lang('name' , 'name' , true)} }}</h3>
                    <h5 class="title-staff-sub">{{ $staff->{prefix_lang('specialty' , 'specialty' , true)} }}</h5>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div class="content-staff">
                        {!! $staff->{prefix_lang('description' , 'description' , true)} !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .img-style-staff {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: scale-down;
        border: 1px solid rgba(0,0,0,0.1);
        box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
        background: #045b9e;
    }
    .title-staff {
        color: #000;
        font-weight: bold;
        font-size: 23px;
        margin-top: 10px;
    }
    .title-staff-sub {
        color: #2894e8;
        margin-top: -3px;
    }
    .content-staff {
        margin-top: 18px;
        border-top: 1px solid rgb(0 0 0 / 3%);
        padding-top: 16px;
    }
</style>
