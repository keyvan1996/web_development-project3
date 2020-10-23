<?php
session_start();
require_once("Project-3-Action2.php");
?>

<?php
    if($_POST["user"] == "admin" && $_POST["passwd"] == "admin")
    {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["user"] = $_POST["passwd"];
        //$_SESSION["balance"] = 0;
        displayFeatures();
    }
    else 
    showNoLoginMsg();
?>