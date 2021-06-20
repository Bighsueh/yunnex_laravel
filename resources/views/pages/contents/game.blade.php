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

<div class="col row m-1"
     style="background-color: #DBEECE;">
    <div class="col-2 text-left">
        <a href="{{route('home')}}"><img class="" style="height:80px;"
                                         src="{{asset('assets/images/contents/rollback.png')}}"/></a>
    </div>
    <div class="col-8 align-self-center" >
        <h2 class="text-center" style="color: #00357B;">遊戲區</h2>
    </div>
    <div class="col-2" >
        <img class="" style="height:80px;" src="{{asset('assets/images/yunnex_logo_transparent.png')}}"/>

    </div>
</div>
<hr class="text-black" style="border-top: 3px solid black;width: 100%"/>
<h4>
    跟打地鼠雷同：按開始後計時一分鐘點擊螢幕出現的花生，點一個得一分最後與機器人比分數，較高者勝，每三天登進來玩就有機會抽到折價券。
</h4>
<div class="text-center">
    <div class="text-left">
        <a id="time"><a>
                <a id="score"><a>
    </div>
    <div class="peanut_game" style="position: absolute;left:20px;">

        <img id="bg" class="bg" width="650px" src="{{asset('assets/images/contents/game/background.png')}}"style='
            position: absolute;
            z-index: 0;
        '/>
        <img id="pn_1" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
             top: 150px;
            left: 125px;
            z-index: 1;
            display:none;
"/>
        <img id="pn_2" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
            top: 150px;
            left: 295px;
            z-index: 1;
            display:none;
"/>
        <img id="pn_3" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
            top: 150px;
            left: 465px;
            z-index: 1;
            display:none;
"/>
        <img id="pn_4" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
            top: 250px;
            left: 125px;
            z-index: 1;
            display:none;
"/>
        <img id="pn_5" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
            top: 250px;
            left: 295px;
            z-index: 1;
            display:none;
"/>
        <img id="pn_6" class="pn" width="65px" src="{{asset('assets/images/contents/game/peanut.png')}}" style="
            position: absolute;
            top: 250px;
            left: 465px;
            z-index: 1;
            display:none;
"/>

        <button id="game_start" type="button" class="btn btn-light btn-lg" name="button" style="
            position: absolute;
            top: 180px;
            left: 260px;
            ">開始遊戲
        </button>
    </div>

</div>
<script>

    var score = 0;
    var time = 30;
    var time_left = time;
    game_init();

    function game() {
        game_proccess = setInterval(() => {
            let rand_time = Math.floor(Math.random() * 700) + 300;
            setTimeout(peanut_pop, rand_time)
            peanut_pop();
            count_down();

        }, 1000);
    }

    var game_start_btn = document.getElementById("game_start");
    game_start_btn.onclick = function () {
        game_start_btn.style.display = 'none';
        game();

    }

    function game_init() {
        score = 0;
        time_left = time;
        document.getElementById('time').textContent = "剩餘時間：" + time_left;
        document.getElementById('score').textContent = "分數：" + score;
    }

    function peanut_pop() {
        let rand_position = Math.floor(Math.random() * 6) + 1; //隨機指定出現位置1~6
        let pn = document.getElementById("pn_" + rand_position)
        let wait_time = Math.floor(Math.random() * 1000)+1000;
        let count = 0;
        pn.style.display = 'block';

        let waiting = setInterval(() => {
            count++;
            if (count === wait_time) {
                pn.style.display = 'none';
                clearTimeout(waiting);
            }
            pn.onclick = function () {
                if (pn.style.display === 'block')
                    addScore();
                pn.style.display = 'none';
                clearTimeout(waiting);
            }

        }, 1);
    }

    function addScore() {
        score++;
        document.getElementById('score').textContent = "分數：" + score;
    }

    function count_down() {
        //回傳計時器數字
        time_left--;
        document.getElementById('time').textContent = "剩餘時間：" + time_left;
        if (time_left === 0) {
            clearTimeout(game_proccess);
            window.alert('恭喜您獲得 ' + score + '分');
            document.getElementById('pn_1').style.display = 'none';
            document.getElementById('pn_2').style.display = 'none';
            document.getElementById('pn_3').style.display = 'none';
            document.getElementById('pn_4').style.display = 'none';
            document.getElementById('pn_5').style.display = 'none';
            document.getElementById('pn_6').style.display = 'none';
            game_start_btn.style.display = 'block';
        }
    }

</script>

</body>
</html>
