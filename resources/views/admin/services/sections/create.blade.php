@component('admin.components.modal' , ['url' => route('admin.sectionService.store') , 'size' => 'mw-1000px'  , 'table' => '#sectionService-table' , 'title' => 'اضافة قسم خدمة جديدة'])
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name' , 'الخدمة') !!}
                {{Form::select('service_id', $services ,null , ['class' => 'form-control form-control-solid select2_modal' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_ar' , 'الاسم القسم') !!}
                {{Form::text('name_ar',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة القسم') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'],1 , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('public' , 'النشر في الرئيسية') !!}
                {{Form::select('public' , [1 => 'نعم' , 0 => 'لا'],0 , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('image' , 'الصورة') !!}
                {{Form::file('image' , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_ar' , 'الوصف') !!}
                {{Form::textarea('description_ar', null  , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_en' , 'الوصف بالانجليزي') !!}
                {{Form::textarea('description_en' , null , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>

    </div>
@endcomponent

