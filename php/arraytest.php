<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 11/1/2016
 * Time: 2:49 PM
 */


$a = array(
    'a' => 'a',
    'b' => 'b',
    "qweqwe" => "shit"
);

if(isset($a['qweqwe'])){
    if($a['qweqwe']){
        echo $a['qweqwe'];
    }
}
foreach ($a as $key) {
    ${$key} = "A";
}
