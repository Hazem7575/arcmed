<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<style>
    body {
        font-family: arabic;
        background-image: linear-gradient(to bottom, rgb(11 28 40 / 40%), rgb(0 0 0)),        url(/assets/img/img-2.webp);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        background-position: center;
        padding: 0;
        user-select: none;
    }
    .back-small {
        background-image: linear-gradient(to bottom, rgb(11 23 33 / 92%), rgb(12 36 55 / 88%)),
        url(/assets/img/img-2.webp);
        background-size: cover;
        width: 100%;
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        text-align: right;
        color: #fff;
        height: 600px;
        position: relative;
    }

    .back-small h1 {
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }
    .back-small img {
        width: 250px;
        text-align: center;
        margin: auto;
        display: block;
    }
    .back-small ul {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        font-size: 17px;
    }
    .mt-150 {
        margin-top: 100px;
    }
    .btn-href {
        display: block;
        width: 200px;
        padding: 15px;
        margin: auto;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.2);
        color: #fff;
        transition: 0.5s;
    }
    .btn-href:hover {
        color: #fff;
        background: #284860;
    }
</style>
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="back-small mt-150">
                   <img src="{{asset('assets/img/logo.webp')}}" alt="">
                   <h1>الموقع قيد الانشاء</h1>
                   <ul>
                       <li>مركز علاج طبيعي  مكان الشفاء والصحة</li>
                       <li>ذا كنت تبحث عن مكان يجمع بين الخبرة الطبية العالية والرعاية الشخصية في عالم العلاج الطبيعي، فإن هو المكان المثالي لك</li>
                       <li>في، نهتم برعاية صحة جسمك وعافيتك العامة من خلال مجموعة متنوعة من الخدمات الطبية الطبيعية</li>
                       <li>علاج الألم: نستخدم أحدث التقنيات والعلاجات للتعامل مع مشاكل الألم المختلفة، سواء كان ذلك نتيجة لإصابات رياضية أو التهابات مزمنة.</li>
                       <li>تأهيل الحركة: نقدم برامج تأهيل مخصصة لاستعادة الحركة والقوة بعد الجراحة أو الإصابات.</li>
                       <li>علاج أمراض الجهاز العصبي: نقدم علاجاً متخصصاً لمرضى الجهاز العصبي، مما يساعدهم على تحسين وظائفهم الحركية.</li>
                       <li>علاج الأمراض العضلية والهيكلية: نستخدم تقنيات متقدمة للتعامل مع مشاكل العضلات والهياكل العظمية.</li>
                       <li>علاج التوتر والقلق: يمكننا مساعدتك في تخفيف التوتر والقلق من خلال تقنيات العلاج الطبيعي.</li>
                   </ul>

                   <a href="#" class="btn btn-href">الانتقال للبريد</a>
               </div>
           </div>

       </div>
   </div>

</body>
</html>
