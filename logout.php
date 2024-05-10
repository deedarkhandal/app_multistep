<?php
session_start();
session_destroy();
header('location:http://localhost/app_multistep/register.php');
exit();
?>