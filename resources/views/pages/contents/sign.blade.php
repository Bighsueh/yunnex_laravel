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
    <div id="right_thumb_peanuts" class="col-3 text-left">
        <img  class="" style="height:200px " src="{{asset('assets/images/contents/right_thumb_peanuts.png')}}"/>
        <label id="7days" class="bg-success text-white">第七天</label>
    </div>
    <div class="col-6 text-center align-self-center">
        <h3 onclick="sign()" id="main_title">
        </h3>
    </div>
    <div class="col-3 text-right">
        <img id ='red_envelope' onclick="get_discount()" class="" style="height:200px" src="{{asset('assets/images/contents/red_envelope.png')}}"
             style="-webkit-transform: rotate(45deg);    /* for Chrome || Safari */"
        />
        <h6 id="remove_sign" onclick="removeCookie()">清除本日簽到</h6>
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

<script>
    var sign_check = false;
    document.getElementById('right_thumb_peanuts').style.opacity = 0.2;
    document.getElementById('7days').style.display = 'none';
    document.getElementById('main_title').innerHTML = '點擊完成本日簽到';
    document.getElementById('red_envelope').style.display = 'none';
    document.getElementById('remove_sign').style.display = 'none';

    function sign() {
        document.getElementById('main_title').innerHTML = '恭喜你完成了七日簽到<br>\n' +
            '            點擊紅包抽取折價券吧';
        document.getElementById('red_envelope').style.display = 'inline';
        document.getElementById('remove_sign').style.display = 'block';
        document.getElementById('right_thumb_peanuts').style.opacity = 1;
        document.getElementById('7days').style.display = 'inline';
    }

    function setCookie(name) {
        document.cookie = "discount_item = " + name;
    }

    function removeCookie() {
        document.cookie = "discount_item = ";
        window.alert('已重設本日簽到');
        location.reload();
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }

    function get_discount(){
        if (!sign_check){

            let get_item = getRandomInt(4);
            document.cookie = "discount_item = "
            switch (get_item) {
                case 0:
                    setCookie("10_percent_off");
                    window.alert('恭喜您獲得九折折價券!');
                    break;
                case 1:
                    setCookie("twice85percent");
                    window.alert('恭喜您獲得第二件八五折折價券!');
                    break;
                case 2:
                    setCookie("50dollor_discount");
                    window.alert('恭喜您獲得50元折價券!');
                    break;
                case 3:
                    setCookie("next_time");
                    window.alert('很抱歉沒抽中，下次再試吧!!');
                    break;
            }
            sign_check = true;
            // document.cookie = "discount"
        }else{
            window.alert('今日已經簽到囉~');
        }

    }
</script>
</body>
</html>
