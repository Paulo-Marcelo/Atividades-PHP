<!DOCTYPE html>
<html>
<head>
	<title>Atvd Estevão</title>
</head>
<body>
	<h1>Cadastro de Alunos ou funcionários da EEEP</h1>
	<form method="GET" name="UserInfo" >
		<select name="User">
			<option>Selecione</option>
			<option type="" value="0">Selecione</option>
			<option type="" value="1">Administrador</option>
			<option type="" value="2">Aluno</option>
			<option type="" value="3">Coordenador</option>
		</select>
	<input type="number" name="quant" placeholder="Quantidade de Cadastros"/>
	<input type="submit" name="Escolher"/>
	</form>
	<?php
	if(isset($_GET['User'])){
	$tipo = $_GET['User'];
	if($tipo===0){
	Echo"<font color="red">Escolha opção por favor :)</font>";
}
	if($tipo==1){
	include('extensaoatv.html');
}
	}
	?>
//Só consegui fazer isso, não consigo me lembrar de mais nada

</body>
</html>