<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/25/2016
 * Time: 2:41 PM
 */?>


<head>
    <style>

        .line-arrow {
            position: absolute;
            overflow: hidden;
            display: inline-block;
            font-size: 10px; /*set the size for arrow*/
            width: 4em;
            height: 4em;
            top:45%;
        }

        .line-arrow.left {
            border-top: 3px solid black;
            border-left: 3px solid black;
            transform: rotate(-45deg) skew(0deg);
            margin-right:15px;
        }


        .line-arrow.right {
            border-top: 3px solid black;
            border-right: 3px solid black;
            transform: rotate(54deg) skew(20deg);
            right: 50px;
        }

    </style>
</head>
<body>
<div class="line-arrow right"></div>

</body>