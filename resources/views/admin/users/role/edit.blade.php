@component('admin.components.modal' , ['url' => route('admin.role.update' , $role->id) , 'put' => true , 'size' => 'mw-1000px' , 'table' => '#role-table' , 'title' => $role->name])
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('name' , 'اسم الوظيفة') !!}
                {{Form::text('name',$role->name , ['class' => 'form-control form-control-solid' , 'style' => 'width:100%'])}}
            </div>
        </div>
        <div class="col-sm-12">
            <div class="row">
                @foreach($permissions as $key => $permission)
                    <div class="col-md-4">
                        <div class="row check_group group_permission">
                            <div class="col-md-12">
                                <h4>{{$key}}</h4>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($permission as $list)
                                <div class="col-md-2 mt-3">
                                    <div class="checkbox">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" name="permissions[]" {{in_array($list->id , $listHas) ? 'checked' : null}} type="checkbox" value="{{$list->name}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 mt-3">
                                    {{ $list->alias }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endcomponent
