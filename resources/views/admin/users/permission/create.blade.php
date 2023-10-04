@component('admin.components.modal' , ['url' => route('admin.permission.store') , 'table' => '#permission-table' , 'title' => 'اضافة صلاحية جديدة'])
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('group' , 'مجموعة الصلاحية') !!}
                {{Form::select('group', $groups, null , ['class' => 'form-control form-control-solid selectTag_modal' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('alias' , 'اسم الصلاحية') !!}
                {{Form::text('alias', null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('name' , 'اسم البرمجي') !!}
                {{Form::text('name', null , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
    </div>
@endcomponent
