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

    function getFilePath() {
        return __FILE__;
    }

    function getPHPversion() {
        return phpversion();
    }

    function getPort() {
        return isset($_SERVER['SERVER_PORT']) ? $_SERVER['SERVER_PORT'] : 'UnkownPort';
    }

    function getHost() {
        return isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'UnkownHost';
    }

    function getURLVar($var) {
        return isset($_GET[$var]) ? $_GET[$var] : null;
    }

    function getURLVars() {
        return http_build_query($_GET);
    }

    function getServSoftware() {
        if (isset($_SERVER['SERVER_SOFTWARE'])) {
            return $_SERVER['SERVER_SOFTWARE'];
        } else {
            return 'UnkownServSoftware';
        }
    }

?>