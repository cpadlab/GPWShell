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