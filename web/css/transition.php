<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/31/2016
 * Time: 1:51 PM
 */
?>

<html>
<head>

    <!-- draggable import -->
    <script src="../../jquery/jquery-3.1.1.js"></script>

    <style>
        #a{
            position:relative;
            height:100px;
            width:100px;
            background-color: black;
        }

        #b{
            position:absolute;
            height:100%;
            width:50px;
            background-color: blue;
            right:0;
            transition: all 1s;
            z-index:-1;
        }

    </style>
    <script>
        $(function(){
            $("#a").mouseover(function(){
                $("#b").css("right","-50px");
            });
        });

    </script>
</head>

<body>

<div id="a">
    <div id="b"></div>
</div>

</body>

</html>
