<?php

namespace Model;

require_once('autoload.php');
if (isset($_GET['data'])) {
    //this code get's array sent from other page
    // $array = $_GET;

    //this code is used to unserialize the object
    // $user = unserialize(urldecode($_GET['data']));
    // echo "The id is " . $user[0];
    // echo "The name is " . $user[1];
    // echo "Final " . $user[2];

    $serialized = unserialize($_COOKIE['SERIALIZED_USER']);
    echo "The id is " . $serialized->id;
    echo "The name is " . $serialized->name;
    echo "Final " . $serialized->address;
} else {
    echo "There is no data";
}
?>