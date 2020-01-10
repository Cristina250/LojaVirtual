<?php
session_start();
if(@$_SESSION['login'] && @$_SESSION['senha'])
{
session_destroy();
header('location:inicio.php');
}
?>