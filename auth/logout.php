<?php
    require_once "../config/config.php";

    unset($_SESSION['Username']);
    echo "<script>window.location='login.php';</script>";
?>