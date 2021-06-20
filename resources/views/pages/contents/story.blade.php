<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <title>產品介紹</title>
</head>
<body style="background-color: #DBEECE">

<div class="col row "
     style="background-color: #DBEECE;">
    <div class="col-2 text-left">
        <a href="{{route('home')}}"><img class="" style="height:80px;"
                                         src="{{asset('assets/images/contents/rollback.png')}}"/></a>
    </div>
    <div class="col-8 align-self-center">
        <h2 class="text-center" style="color: #00357B;">產品介紹</h2>
    </div>
    <div class="col-2">
        <img class="text-center" style="height:80px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>
    </div>
</div>
<hr class="text-black" style="border-top: 3px solid black;width: 100%"/>
<div class="text-center">
    <label class="label bg-warning ">
        <h4>群　聚　故　事
        </h4>
    </label>
</div>
<div>
    <div class="container">
        <h4>
            一群來自雲林縣農民大學的農民，非常認真地推動農業學習，培養務農興趣，促進農業交流，提升生產技術，並協助大家提升務農的信心與尊嚴，積極推廣安全農業食材，認真來說，農民與消費者的距離並不遠，因為科技的進步(有了網路)、物流的便利(有了宅配服務)，讓雲林好食材不寂寞，同時縮短了消費與農民真正的距離。
            在二代返鄉務農的(領導人
            李伊倫)熱情號召下，希望透過網路行銷雲林的農業，並以推廣「農糧薯條、有機豆漿、鮪魚、有機大豆、小麥、蒜頭、台灣黑米、雜糧」等食材，希望透過數位工具及網路的協助，推廣群聚品牌，以「雲林好食材、好品質、好健康」為願景，並以長期經營行銷的理念，來推廣群聚的口碑與品牌。

        </h4>
    </div>
    <div class="container text-center justify-content-center">
        <img class="center-block justify-content-center mx-auto d-block text-center" style="width: 100%"
             src="{{asset('assets/images/contents/family.png')}}"/>

    </div>
    <div class="text-center">
        <a class="justify-content-center" href="{{route('story2_content')}}">
            <img class=""
                 style="height: 50px; ;"
                 src="{{asset('assets/images/contents/next_page.png')}}"/></a>
    </div>



</div>

</body>
</html>
