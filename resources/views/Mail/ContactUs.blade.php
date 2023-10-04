@if(isset($data['specialization']))
    <div>
        <h2>رسالة شكوي </h2>
        <hr>
        <br>
        <ul>
            <li>الاسم : {{$data['name']}}</li>
            <li>البريد : {{$data['email']}}</li>
            <li>الهاتف : {{$data['phone']}}</li>
            <li>الملاحظة : {{$data['specialization']}}</li>
        </ul>
        <p>{{$data['content']}}</p>
    </div>

@else
    <div>
        <h2>رسالة تواصل معنا</h2>
        <hr>
        <br>
        <ul>
            <li>الاسم : {{$data['name']}}</li>
            <li>البريد : {{$data['email']}}</li>
            <li>الهاتف : {{$data['phone']}}</li>
        </ul>
        <p>{{$data['content']}}</p>
    </div>

@endif
