<?php
//Tanquem la sessió.
session_start();
session_destroy();
echo "<script>window.location='login.php';</script>";
?>
