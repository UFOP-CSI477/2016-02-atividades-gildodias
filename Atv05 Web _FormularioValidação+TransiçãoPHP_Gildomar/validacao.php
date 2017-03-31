<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirmação de Cadastro</title>
	<link rel="stylesheet" href="bootstrap.css" />
</head>
<body bgcolor="#ECF1F9" background="validado.png">

	<div class="col-xs-4 col-xs-offset-4">
		<h1 align="center" class="text-primary"> Dados Cadastrados com Sucesso</h1>
		<br><br>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["nome"])){
		?>

		<div class="form-group">
			<label for="nome">Nome:</label>
			<?php echo $_POST["nome"]; ?>
		</div>
		
		<?php } ?>

		<!-- ----------------------------------------------> 

		<?php 
			if(isset($_POST["rua"])){
		?>		
		
		<div class="form-group">
			<label for="rua">Rua:</label>
			<?php echo $_POST["rua"]; ?>
		</div>
		
		<?php } ?>

		<!-- ----------------------------------------------> 

		<?php 
			if(isset($_POST["numero"])){
		?>		
		
		<div class="form-group">
			<label for="numero">Nº:</label>
			<?php echo $_POST["numero"]; ?>
		</div>
		
		<?php } ?>

		<!-- ----------------------------------------------> 

		<?php 
			if(isset($_POST["complemento"])){
		?>		
		
		<div class="form-group">
			<label for="complemento">Complemento:</label>
			<?php echo $_POST["complemento"]; ?>
		</div>
		
		<?php } ?>

		<!-- ----------------------------------------------> 

		<?php 
			if(isset($_POST["listaCidades"])){
		?>		
		
		<div class="form-group">
			<label for="listaCidades">Cidade:</label>
			<?php echo $_POST["listaCidades"]; ?>
		</div>
		
		<?php } ?> 

		<!-- ----------------------------------------------> 

		<?php 
			if(isset($_POST["listaEstados"])){
		?>		
		
		<div class="form-group">
			<label for="listaEstados">Estado:</label>
			<?php echo $_POST["listaEstados"]; ?>
		</div>
		
		<?php } ?> 

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["cep"])){
		?>		
		
		<div class="form-group">
			<label for="cep">Cep:</label>
			<?php echo $_POST["cep"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["telefone"])){
		?>		
		
		<div class="form-group">
			<label for="telefone">Telefone:</label>
			<?php echo $_POST["telefone"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["celular"])){
		?>		
		
		<div class="form-group">
			<label for="celular">Celular:</label>
			<?php echo $_POST["celular"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["email"])){
		?>		
		
		<div class="form-group">
			<label for="email">Email:</label>
			<?php echo $_POST["email"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->
		
		<?php 
			if(isset($_POST["cpf"])){
		?>		
		
		<div class="form-group">
			<label for="cpf">Cpf:</label>
			<?php echo $_POST["cpf"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["usuario"])){
		?>		
		
		<div class="form-group">
			<label for="usuario">Usuário:</label>
			<?php echo $_POST["usuario"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["genero"])){
		?>		
		
		<div class="form-group">
			<label for="genero">Gênero:</label>
			<?php echo $_POST["genero"]; ?>
		</div>
		
		<?php } ?>

		<!-- ---------------------------------------------->

		<?php 
			if(isset($_POST["area"])){
		?>		
		
		<div class="form-group">
			<label for="area">Área:</label>
			<?php 
			foreach( $_POST['area'] as $k){ ?>
			<br><?php
			  echo $k; 
			} ?>			

		</div>

		<?php } ?>

		<!-- ---------------------------------------------->

	</div>

</body>
</html>


