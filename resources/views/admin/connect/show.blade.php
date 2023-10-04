@component('admin.components.modal' , ['url' => null , 'table' => false , 'footer_hide' => true , 'title' => 'مشاهدة التفاصيل'])
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group ">
                <p>{{$connectUs->content}}</p>
            </div>
        </div>
    </div>
@endcomponent

