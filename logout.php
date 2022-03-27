<?php 
//session end
session_start();
session_destroy();

header("Location: index.php");

?>
