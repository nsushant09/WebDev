<?php
function showName()
{
    return 'Random String for testing purpose';
}

if (isset($_POST['action']) && $_POST['action'] == 'getUserDetails') {
    echo json_encode(getUserDetails($_POST['name']));
}
function getUserDetails($name)
{
    return "The name is " .$name ."and this is a response from getUserDetails() function";
}