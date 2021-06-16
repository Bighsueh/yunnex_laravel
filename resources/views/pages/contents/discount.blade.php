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

<div class=""
     style="background-color: #DBEECE;">
    <div class="" style="display: inline-block;float: left;align-items: center">
        <a href="{{route('home')}}"><img class="" style="height:80px;"
                                         src="{{asset('assets/images/contents/rollback.png')}}"/></a>
    </div>
    <div class=""
         style="display:inline-block ;align-items: center;margin: 2px;margin-left:30%;">
        <h2 class="" style="color: #00357B;">折扣券區</h2>
    </div>
    <div class="" style="display: inline-block;float: right;align-items: center">
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
            <img onclick="get_discount('next_time')" id="next_time" class="center-block d-block text-right" style="display: inline-block; width: 20%"
                 src="{{asset('assets/images/contents/next_time.png')}}"/>
    </div>
</div>
<script>
    var discount_check = false;
    function get_discount(img_name) {
        if(!discount_check){
            if(window.confirm('您確定要使用折價券嗎? \n *提醒您每日只能使用一張折價券')){
                document.getElementById(img_name).style.opacity = "0.2";
                discount_check = true;
            }
        }else{
            window.alert('您今日已到達折價券使用上限!!');
        }

    }


</script>
</body>
</html>
