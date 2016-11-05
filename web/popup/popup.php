<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 11/4/2016
 * Time: 2:36 PM
 */
?>


<html>
<head>
    <script src="../../jquery/jquery-3.1.1.js"></script>
    <style>
        .overlay {
            display:none;
            position: fixed;
            z-index: 100;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            transition: opacity 500ms;
            height:100%;
            width:100%;
        }


        .overlay .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
        }

        .overlay .close:hover {
            color: orange;
        }

        #album-shortcut{
            position:absolute;
            margin: 0 auto;
            top:100px;
            left:0;
            right:0;
            height:500px;
            width:600px;
            background: royalblue;

        }
        #album-next{
            position:absolute;
            top:100px;
            right:0;
            height:500px;
            width:100px;
            background: hotpink;
        }
        #album-back{
            position:absolute;
            top:100px;
            left:0;
            height:500px;
            width:100px;
            background: hotpink;
        }
        #album-jacket{

        }

    </style>
    <script>
        $(function(){

        });


        function popup(musicid){
            console.log(1);
            $(".overlay").css("display","block");
        }
    </script>
</head>
<body>
<div id="popup2" class="overlay">
    <a class="close" href="#">×</a>
    <div id="album-shortcut">
        <div>
            <div id="album-jacket"></div>
            <div id="album-info">
                <div id="album-text">
                </div>
            </div>
        </div>
    </div>

    <div id="album-next">
    </div>

    <div id="album-back">
    </div>
</div>


    <div style="height:50px; width:50px; background: royalblue" onclick="popup(1)"></div>
</body>
</html>
