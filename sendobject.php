<?php
namespace Model;

require_once('autoload.php');
if (isset($_POST['sendObj'])) {
    $user = new User(1, "Sushant", "Kalanki", 9823579122);
    
    setcookie("SERIALIZED_USER", serialize($user), time() + 86400, "/");
    $userdata = urlencode(serialize($user));
    $userArray = array(
        98217346,
        "Array Test",
        "Random value"
    );
    header("Location:recieveobject.php?data=" . $userdata);
    // header("Location:recieveobject.php?" .http_build_query($userArray));
    exit;
}
?>