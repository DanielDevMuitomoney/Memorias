<?php
session_start();
if (! $_SESSION['usuario']){
header ('Location:indexlogin.php');
exit();

}