<?php
    session_start();
    session_destroy();
    Print '<script>alert("Log-out Successful!");</script>';
    header("location:index.php");
?>