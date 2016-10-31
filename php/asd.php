<?php
if(isset($_POST)){
    echo $_POST['name'];
}

var_dump($_POST);


a(1);


function a($b){
    if($b == 2){
        $c = "1";
    }else{
        $c = "2";
    }

    echo $c;
}

?>