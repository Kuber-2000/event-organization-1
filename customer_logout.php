<?php

    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['uemail'])){
        session_destroy();
        header('Location: index.php');
    }

    header('Location: index.php');
?>