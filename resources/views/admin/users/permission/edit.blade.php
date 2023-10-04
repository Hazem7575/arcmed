@component('admin.components.modal' , ['url' => route('admin.permission.update' , $permission->id) , 'put' => true , 'table' => '#permission-table' , 'title' => $permission->alias])
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('group' , 'مجموعة الصلاحية') !!}
                {{Form::select('group', $groups, $permission->group , ['class' => 'form-control form-control-solid selectTag_modal' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('alias' , 'اسم الصلاحية') !!}
                {{Form::text('alias', $permission->alias , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('name' , 'اسم البرمجي') !!}
                {{Form::text('name', $permission->name , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
    </div>
@endcomponent
