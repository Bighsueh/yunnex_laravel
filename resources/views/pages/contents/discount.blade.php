<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <title>折扣券區</title>
</head>
<body style="background-color: #DBEECE">

<div class="col row m-1"
     style="background-color: #DBEECE;">
    <div class="col-2 text-left">
        <a href="{{route('home')}}"><img class="" style="height:80px;"
                                         src="{{asset('assets/images/contents/rollback.png')}}"/></a>
    </div>
    <div class="col-8 align-self-center" >
        <h2 class="text-center" style="color: #00357B;">折扣券區</h2>
    </div>
    <div class="col-2" >
        <img class="" style="height:80px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>
    </div>
</div>
<hr class="text-black" style="border-top: 3px solid black;width: 100%"/>
<div class="text-center">
    <label class="label" style="color: gray">
    <h4>
        我  的  折  扣  區
    </h4>
    </label>
</div>
<div class="text-left" style="color: gray">
    <div class="container row text-nowrap">
        <h4 class="col-2"></h4>
        <h4 class="col-6">
            折扣券使用規則:<br/>
            - 折扣券單筆消費僅限使用一張。<br/>
            - 折扣券使用期間為一個月內。<br/>
            ex.這張5折折價券使用期限剩幾天...
        </h4>
        <h4 class="col-4 text-right">
            <img style="width:auto" src="{{asset('assets/images/contents/right_hello_peanuts.png')}}"/>
        </h4>
    </div>
    <div class= "text-nowrap col-12 row container text-center justify-content-center" >
            <img onclick="get_discount('10_percent_off')" id="10_percent_off" class="center-block d-block text-left" style="display: inline-block; width: 20%"
                 src="{{asset('assets/images/contents/10_percent_off.png')}}"/>
            <img onclick="get_discount('twice85percent')" id="twice85percent" class="center-block d-block text-center" style="display: inline-block; width: 20%"
                 src="{{asset('assets/images/contents/twice85percent.png')}}"/>
            <img onclick="get_discount('50dollor_discount')" id="50dollor_discount" class="center-block d-block text-right" style="display: inline-block; width: 20%"
                 src="{{asset('assets/images/contents/50dollor_discount.png')}}"/>
            <img onclick="window.alert('再接再厲，下次一定會抽中的!')" id="next_time" class="center-block d-block text-right" style="display: inline-block; width: 20%"
                 src="{{asset('assets/images/contents/next_time.png')}}"/>
    </div>
</div>
<script>
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    function removeCookie() {
        document.cookie = "discount_item = ";
    }

    function get_discount(img_name) {
        let opa = document.getElementById(img_name).style.opacity;
        if (opa !== "1") {
            return;
        }
        if(!discount_check){
            if(window.confirm('您確定要使用折價券嗎? \n *提醒您每日只能使用一張折價券')){
                document.getElementById(img_name).style.opacity = "0.2";
                discount_check = true;
                removeCookie();
            }
        }else{
            window.alert('您今日已到達折價券使用上限!!');
        }

    }

    var discount_check = false;
    document.getElementById('10_percent_off').style.opacity = "0.2";
    document.getElementById('twice85percent').style.opacity = "0.2";
    document.getElementById('50dollor_discount').style.opacity = "0.2";
    document.getElementById('next_time').style.opacity = "0.2";

    if(getCookie('discount_item') === '10_percent_off'){
        document.getElementById('10_percent_off').style.opacity = "1";
    }
    if(getCookie('discount_item') === 'twice85percent'){
        document.getElementById('twice85percent').style.opacity = "1";
    }
    if(getCookie('discount_item') === '50dollor_discount'){
        document.getElementById('50dollor_discount').style.opacity = "1";
    }
    if(getCookie('discount_item') === 'next_time'){
        document.getElementById('next_time').style.opacity = "1";
    }



</script>
</body>
</html>
