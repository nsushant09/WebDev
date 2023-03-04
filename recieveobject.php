<?php

namespace Model;

require_once('autoload.php');
if(isset($_GET['data'])){
    $user =  unserialize(urldecode($_GET['data']));
    echo $user->display();
}else{
    echo "There is no data";
}
?>