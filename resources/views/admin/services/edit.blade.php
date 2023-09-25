@component('admin.components.modal' , ['url' => route('admin.services.update' , $service->id)  , 'put' => true , 'table' => '#service-table' , 'title' => 'اضافة خدمة جديدة'])

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name' , 'اسم الخدمة') !!}
                {{Form::text('name',$service->name , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',$service->name_en , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة الخدمة') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'], $service->status , ['class' => 'form-control form-control-solid ' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',$service->order , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
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

