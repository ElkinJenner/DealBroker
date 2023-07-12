<?php
session_start();
if(!isset($_SESSION['Usuario'])){
        header("Location: ../dashboard/login.php");
}