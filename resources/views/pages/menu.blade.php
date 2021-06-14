<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    {{--    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet"/>--}}
    <title>Yunnex</title>
</head>
<body>
<div class="container-fluid text-center "
     style="background-color: #DBEECE">
    <img style="height:100px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>
</div>
<table class="col-12">
    <tr>
        <td class="p-2 text-center">
            <a href="{{route('intro_front')}}" style="text-decoration:none;color:black">
                <h4>產品介紹</h4>
                <img class="col-8" src="{{asset('assets/images/menu/intro.png')}}" style="border-radius:6px">
            </a>
        </td>
        <td class="p-2 text-center">
            <a href="{{route('story_front')}}" style="text-decoration:none;color:black">
                <h4>品牌故事</h4>
                <img class="col-8" src="{{asset('assets/images/menu/story.png')}}" style="border-radius:6px">
            </a>
        </td>
        <td class="p-2 text-center">
            <a href="{{route('discount_front')}}" style="text-decoration:none;color:black">
                <h4>折扣券區</h4>
                <img class="col-8" src="{{asset('assets/images/menu/discount.png')}}" style="border-radius:6px">
            </a>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <td class="p-2 text-center">
            <a href="{{route('sign_front')}}" style="text-decoration:none;color:black">
                <h4>簽到區</h4>
                <img class="col-8" src="{{asset('assets/images/menu/sign.png')}}" style="border-radius:6px">
            </a>
        </td>
        <td class="p-2 text-center">
            <a href="{{route('game_front')}}" style="text-decoration:none;color:black">
                <h4>遊戲區</h4>
                <img class="col-8" src="{{asset('assets/images/menu/game.png')}}" style="border-radius:6px">
            </a>
        </td>
        <td class="p-2 text-center">
            <a href="{{route('order_front')}}" style="text-decoration:none;color:black">
                <h4>下單區</h4>
                <img class="col-8" src="{{asset('assets/images/menu/order.png')}}" style="border-radius:6px">
            </a>
        </td>
    </tr>
</table>


</body>
</html>
