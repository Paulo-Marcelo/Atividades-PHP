<?php
$login =$_POST['usuario'];
$senha =$_POST['senha'];

if($login == "admin" && $senha == "admin"){
	session_start();
	$_SESSION['login']= $login;
	$_SESSION['senha']= $senha;
	header('Location: controle/index1.html');
}else{
	header('Location: ../index.html');
}

?>