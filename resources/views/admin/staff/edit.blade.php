@component('admin.components.modal' , ['url' => route('admin.staff.update' , $staff->id) , 'size' => 'mw-1000px' , 'put' => true , 'table' => '#staff-table' , 'title' => $staff->{prefix_lang('name' , 'name' , true)}])
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_ar' , 'الاسم الطبيب') !!}
                {{Form::text('name_ar',$staff->name_ar , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('name_en' , 'الاسم بالانجليزي') !!}
                {{Form::text('name_en',$staff->name_en , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('status' , 'حالة القسم') !!}
                {{Form::select('status' , [1 => 'مفعل' , 0 => 'غير مغعل'], $staff->status , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('public' , 'حالة النشر') !!}
                {{Form::select('public' , [1 => 'مفعل' , 0 => 'غير مغعل'], $staff->public , ['class' => 'form-control form-control-solid select2_modal' , 'placeholder' => 'اختيار الخدمة'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('order' , 'الترتيب') !!}
                {{Form::number('order',$staff->order , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('image' , 'الصورة') !!}
                {{Form::file('image' , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('specialty_ar' , 'التخصص') !!}
                {{Form::text('specialty_ar',$staff->specialty_ar , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group ">
                {!! Form::label('specialty_en' , 'التخصص بالانجليزي') !!}
                {{Form::text('specialty_en',$staff->specialty_en , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_ar' , 'الوصف') !!}
                {{Form::textarea('description_ar', $staff->description_ar  , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group ">
                {!! Form::label('description_en' , 'الوصف بالانجليزي') !!}
                {{Form::textarea('description_en' , $staff->description_en , ['class' => 'form-control form-control-solid' , 'rows' => 5 , 'style' => 'width:100%'])}}
            </div>
        </div>

    </div>
@endcomponent

