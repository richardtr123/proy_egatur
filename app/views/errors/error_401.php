<?php 
    if (!isset($_SESSION['user_id'])) {
        header("location: ".URLROOT."/users/login");
        }
?>
no tienes permisos sufiocientes