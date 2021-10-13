<?php
session_start();
if (! $_SESSION['usuario']){
header ('Location:cadastro.php');
exit();

}