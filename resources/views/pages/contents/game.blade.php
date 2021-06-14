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
<h4>
    跟打地鼠雷同：按開始後計時一分鐘點擊螢幕出現的花生，點一個得一分最後與機器人比分數，較高者勝，每三天登進來玩就有機會抽到折價券。
</h4>
<div class="container text-center">
    <img style="width: 80%" src="{{asset('assets/images/contents/peanuts_game.jpg')}}"/>
</div>


</body>
</html>
