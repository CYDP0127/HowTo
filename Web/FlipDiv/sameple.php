<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 8/10/2016
 * Time: 9:14 PM
 */

?>
<!------------jquery import ----------->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>


<script>

    $(function(){

        $("#login-text").click(function (e){
            var cards = document.querySelectorAll(".card.effect__click");
            var c = cards[0].classList;
            c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
        });

        $("#signup-text").click(function (e){
            var cards = document.querySelectorAll(".card.effect__click");
            var c = cards[0].classList;
            c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
        });

    });

</script>
<link rel="stylesheet" href="css/style.css">

<div class="wrapper" id="wrapper">
    <div class="container">
        <div class="section">
            <div class="section__content clearfix">
                <div class="card effect__click">
                    <div class="card__front">
                                <span class="card__text">
                                    front
                                </span>
                    </div>
                    <div class="card__back">
                                <span class="card__text">
                                    back

                                </span>
                    </div>
                </div><!-- /card -->
            </div>
        </div><!-- /card -->
    </div><!-- /#wrapper -->
</div>
