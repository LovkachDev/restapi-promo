<?php

    session_start();
    if($_SESSION['auth'] == "true")
    {
        header('Location: ./panel.php');
    }

?>