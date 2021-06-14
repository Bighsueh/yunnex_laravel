<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <title>簽到區</title>
</head>
<body style="background-color: #DBEECE">

<div class=""
     style="background-color: #DBEECE;">
    <div class="" style="display: inline-block;float: left;align-items: center">
        <a href="{{route('home')}}"><img class="" style="height:80px;"
                                         src="{{asset('assets/images/contents/rollback.png')}}"/></a>
    </div>
    <div class=""
         style="display:inline-block ;align-items: center;margin: 2px;margin-left:30%;">
        <h2 class="" style="color: #00357B;">簽到區</h2>
    </div>
    <div class="" style="display: inline-block;float: right;align-items: center">
        <img class="" style="height:80px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>

    </div>
</div>
<hr class="text-black" style="border-top: 3px solid black;width: 100%"/>
<div class="container col row text-nowrap">
    <div class="col-3 text-left">
        <img class="" style="height:200px " src="{{asset('assets/images/contents/right_thumb_peanuts.png')}}"/>
        <label class="bg-success text-white">第七天</label>
    </div>
    <div class="col-6 text-center align-self-center">
        <h3>
            恭喜你完成了七日簽到<br>
            典籍紅包抽取折價券吧
        </h3>
    </div>
    <div class="col-3 text-right">
        <img class="" style="height:200px" src="{{asset('assets/images/contents/red_envelope.png')}}"
             style="-webkit-transform: rotate(45deg);    /* for Chrome || Safari */"
        />
    </div>
    <div class= "text-nowrap col-12 row container text-center justify-content-center" >
        <div class="">
            <img class="center-block d-block text-left" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
            <label class="bg-success text-white">第一天</label>
        </div>
        <div class="">
            <img class="center-block d-block text-center" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
            <label class="bg-success text-white">第二天</label>
        </div>
        <div class="">
            <img class="center-block d-block text-right" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
            <label class="bg-success text-white">第三天</label>
        </div>
         <div class="">
            <img class="center-block d-block text-left" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
             <label class="bg-success text-white">第四天</label>
        </div>
        <div class="">
            <img class="center-block d-block text-center" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
            <label class="bg-success text-white">第五天</label>
        </div>
        <div class="">
            <img class="center-block d-block text-right" style="display: inline-block;width: 100px"
                 src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
            <label class="bg-success text-white">第六天</label>
        </div>
    </div>
</div>


</body>
</html>
