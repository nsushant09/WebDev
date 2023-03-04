<?php
namespace Model;
require_once('autoload.php');
if (isset($_POST['sendObj'])) {
    $user = new User(1, "Sushant", "Kalanki", 9823579122);
    $userdata = urlencode(serialize($user));
    header("Location:recieveobject.php?data=" .$userdata);
    exit;
}
?>