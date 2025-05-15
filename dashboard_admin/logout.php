<?php 
session_start();
session_destroy();
header("Location: /php-front/login/index.php");
exit;