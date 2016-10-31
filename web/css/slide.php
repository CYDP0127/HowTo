<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10/31/2016
 * Time: 3:34 PM
 */

?>

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
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

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
        }

        #slider{
            position:relative;
            top:200px;
            background-color: antiquewhite;
            height:100px;
            width:100px;
         }

    </style>
    <script>

        $(function(){
            $('#slider').click(function(){
                $(this).hide("slide",{direction: "left"},500);
            });
        });
    </script>
</head>

<body>

<div id="slider"></div>

</body>

</html>
