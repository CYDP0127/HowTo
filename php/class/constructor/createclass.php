<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 8/16/2016
 * Time: 11:09 AM
 */

$test = new Test(); //only child construct
$test2 = new Test3(); //parent first and child

class Text2{
    function __construct() {
        echo "parent";
    }
}

class Test extends Text2{
    function __construct() {
        echo "child";
    }
}


class Text4{
    function __construct() {
        echo "parent";
    }
}

class Test3 extends Text4{
    function __construct() {
        parent::__construct();
        echo "child";
    }
}



?>