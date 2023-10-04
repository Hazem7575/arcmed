@component('admin.components.modal' , ['url' => route('admin.services.store') , 'table' => '#service-table' , 'title' => 'اضافة خدمة جديدة'])
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name_ar' , 'اسم الخدمة') !!}
                {{Form::text('name_ar',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة الخدمة') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'],1 , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('background' , 'الخلفية') !!}
                {{Form::file('background' , ['class' => 'form-control form-control-solid file-u' , 'style' => 'width:100%'])}}
            </div>
        </div>

    </div>
@endcomponent

