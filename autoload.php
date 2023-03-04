<?php

// to clear cache.
// $functions = spl_autoload_functions();
// foreach($functions as $function){
//     spl_autoload_unregister($functions);
// }

spl_autoload_register(function ($class) {
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($filename)) {
        require $filename;
    } else {
        die("Not found class ($filename)");
    }
});
?>