<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

    <style>
    html{
        cursor:none;
        overflow:hidden;
    }
    body{
            margin:0;
            background-image: url("https://cutewallpaper.org/21/background-gif-html/15-CSS-Animated-Backgrounds-Pintire.gif");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width:100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow:hidden;
        }
        #head{
            width:240px;
            height:220px;
            background:radial-gradient(ellipse at 100% 50%,#d2d1cf,#faf3fa);
            box-shadow:inset 0px 4px 10px #fff;
            border-radius:100%;
            position: relative;
            margin:auto;
            padding:10px;
            z-index: 100;
        }
         #mask,#face {
            position: absolute;
            top:60%;
            left:50%;
            transform: translate(-50%,-50%);
            width:calc(100% - 40px);;
            height:60%;
            background:linear-gradient(to right,#ad09f4,#2029ef,#1affff);
            border-radius: 100px 100px 100% 100%  / 100%;
            box-shadow:0px 0px 10px #aaa;
        }
        #face{
            background: repeating-linear-gradient(to left,#000,transparent),repeating-linear-gradient(to bottom,#000,#555);
            background-size:4px 100%,100% 4px;
            top:50%;
            left:50%;
            width: calc(100% - 20px);
            height: calc(100% - 20px);
        }
        #eye1,#eye2{
            position: absolute;
            left:25%;
            top:50%;
            background: #fff;
            border-radius: 100%;
            width:30px;
            height:35px;
            transform:translate(-50%,-50%) rotate(-10deg);
            animation:5s linear blink infinite;
        }
        #eye2{
            left:unset;
            right:10%;
            transform:translate(-50%,-50%) rotate(10deg);
        }

        @keyframes blink{
            94%{
                height:35px;
            }
            97%{
                height:0px;
            }
            100%{
                height:35px;
            }
        }
        #body{
            width:300px;
            height:350px;
            position: absolute;
            background:radial-gradient(ellipse at 100% 50%,#d2d1cf,#faf3fa);
            box-shadow:inset 0px -10px 30px 10px #fff;
            top:50%;
            left:50%;
            z-index:10;
            border-radius: 30% / 100% 100% 0px 0px;
            transform:translate(-50%,130px);
        }
        #lhand,#rhand{
            position: absolute;
            top:30px;
            left:-10px;
            width:50px;
            height:300px;
            background: inherit;
            box-shadow:inset 2px 2px 10px #fff,4px 0px 16px #ddd;
            border-radius:100% 20px 20px 100% / 100% 50px 50px 100%;
            transform-origin:100% 0%;
            transform:rotate(10deg);
        }
        #lhand{
            
            animation: 5s linear 1 sayHi;
        }
        #rhand{
            left:unset;
            right:10px;
            transform-origin:0% 0%;
            box-shadow:inset 2px 2px 10px #fff,4px 0px 16px #ddd;
            transform:rotateZ(-10deg) rotateY(180deg) translate(-130%);
            
            
            animation: 5s linear 1 sayHi2;
        }
        #heart{
            background-image: url("https://64.media.tumblr.com/df372a3d795dff80a25608e978c5317b/d529aa961f15ff69-de/s400x600/bd9ad6eaa0bd5c2ad1664f558b78cfca580c83f2.gifv");
            position: absolute;
            top:35%;
            left:50%;
            width:65px;
            height:65px;
            border-radius: 100%;
            border:5px groove #ccc;
            transform:translate(-50%,-50%);
            overflow:hidden;
            background: radial-gradient(circle at 50% 50%,#7fb2fd 5%,white);
        }
        #heart:before,#heart:after{
            content:"";
            width:0px;
            height:0px;
            position: absolute;
            display:block;
            top:50%;
            left:50%;
            border-radius: inherit;
            animation: 2s cubic-bezier(0.6, -0.28, 0.735, 0.045) heart infinite;
            transform: translate(-50%,-50%);
            background:inherit;
            border:3px double #7fb2fd;
            background: inherit;
        }
        @keyframes heart{
            90%{
                opacity:1;
            }
            100%{
                width:100%;
                height:100%;
                opacity:0;
            }
        }
        @keyframes sayHi{
            
            90%{

                transform:rotateZ(10deg) translateY(0px);
            }
            95%{ 

                transform:rotateZ(20deg) translateY(-40px);
            }
            100%{
                
                transform:rotateZ(10deg) translateY(0px);
            }
        }
        @keyframes sayHi2{
            
            90%{

                transform:rotateZ(-10deg) rotateY(180deg) translate(-130%,0px);
            }
            95%{ 

                transform:rotateZ(-20deg) rotateY(180deg) translate(-130%,-40px);
            }
            100%{
                
                transform:rotateZ(-10deg) rotateY(180deg) translate(-130%,0px);
            }
        }
        #cursor{
            width:30px;
            height:30px;
            border-radius:100%;
            transform:translate(-50%,-50%);
            position:fixed;
            background:linear-gradient(to top right,hotpink,salmon);
            box-shadow:0px 0px 10px salmon,0px 0px 15px hotpink;
            z-index:200;
            top:-100px;
            left:-100px;
        }
    </style>
</head>
<body>
    <div id="head">
        <div id="mask">
            <div id="face">
                <div id="eye1"></div>
                <div id="eye2"></div>
            </div>
        </div>
    </div>

    <!-- <div id="body">
        <div id="heart"></div>
        <div id="lhand"></div>
        <div id="rhand"></div>
    </div> -->
    

    </div>
    <div id="cursor"></div>
    <script>


        const $=function(el){ return document.querySelector(el); }
            
        document.onmousemove=manageMouse;
        document.ontouchmove=manageMouse;
        function manageMouse(e){
            var x=e.clientX || e.touches[0].clientX;
            var y=e.clientY || e.touches[0].clientY;
            $("#cursor").style.left=x+"px";
            $("#cursor").style.top=y+"px";
            x=map(x,0,innerWidth,-1,1);
            y=map(y,0,innerHeight,-1,1);

            lookAt(x,y);
        }


        function lookAt(x,y){
            var maskX=(50+(x*-5));
            var maskY=(50+(y*-5));

            var eyeY=(50+(y*-40));
            var eyeX=(50+(x*-40));

            $("#mask").style.transform="translate(-"+(maskX)+"%,-"+(maskY)+"%)";

            $("#eye1").style.transform="translate(-"+(eyeX)+"%,-"+(eyeY)+"%) rotateX("+Math.floor(x*15)+"deg) rotateY("+Math.floor(y*15)+"deg) rotateZ(-10deg)";


            $("#eye2").style.transform="translate(-"+(eyeX)+"%,-"+(eyeY)+"%) rotateX("+Math.floor(x*15)+"deg) rotateY("+Math.floor(y*15)+"deg) rotateZ(10deg)";

            $("#head").style="box-shadow:inset "+(x*12)+"px "+(y*12)+"px 30px #fff";

        }

        function map(val, min, max, rMin, rMax) {
            var diff = max - min;
            var diffR = rMax - rMin;
            return rMin + (val / diff) * diffR;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
    
</body>
</html>
