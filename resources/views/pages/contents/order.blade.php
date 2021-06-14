<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <title>遊戲區</title>
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
        <h2 class="" style="color: #00357B;">遊戲區</h2>
    </div>
    <div class="" style="display: inline-block;float: right;align-items: center">
        <img class="" style="height:80px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>

    </div>
</div>
<hr class="text-black" style="border-top: 3px solid black;width: 100%"/>
<div class="container text-nowrap row text-center">
    <div class="col-6">
        <h4>點擊右邊花生即可連接下單區囉</h4>
        <img class="img-fluid" style="width: 50%" src="{{asset('assets/images/contents/boss_hold_peanuts.jpg')}}"/>
    </div>
    <div class="col-6">
        <a href="http://yunlinfood.com.tw/products.asp"><img style="width: auto" src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/></a>
    </div>
</div>


</body>
</html>
