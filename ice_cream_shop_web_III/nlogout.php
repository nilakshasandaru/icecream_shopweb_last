<?php
session_start();
session_destroy();
header("Location: nlogin.html");
exit;
?>
