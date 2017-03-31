<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="bootstrap.css" />
	
	<script src="./js/jquery-3.1.1.js"></script>
	<script src="./js/jquery.validate.js"></script>

	<style>
       .error{
             color:green
       }
	</style>

</head>
<body background="cadastro.jpg" text="#000000">

	<div class="col-xs-4 col-xs-offset-4">
	  <h1 align="center">Cadastro</h1>
	  <form name="cadastro" id="cadastro" method="post" action="validacao.php">
		
	 	<div class="form-group">
		  <label for="nome">Nome:</label>
				<input name="nome" type="text" required="required" class="form-control" 	id="nome" form="cadastro" size="50">
          <label for="Endereço"> Rua:</label>
 	          <input name="Endereço" type="text" required class="form-control" id="Endereço" size="46">
 	      <label for="numero2">Nº</label>
 	      <input name="numero" type="text" class="form-control" id="numero" size="8">
		 	Complemento:
		 	<input name="complemento" type="text" required="required" class="form-control">
	 	</div>

			 <div class="col-xs-8">
				<div class="form-group"></div>
			</div>

			<div class="col-xs-4">
			  <div class="form-group"></div>
			</div>

			<div class="form-group">
			  <p>CPF:
              <input name="cpf" type="number" required="required" class="form-control" id="cpf">
			  </p>
            </div>

		<div class="col-xs-4">
				<div class="form-group">
				  <p>
				    <label><br>
				      Cidade:</label>
				    <select name= "listaCidades" required="required" class="form-control">
				      <option value="Montes Claros">Montes Claros</option>
                      <option value="João Monlevade">João Monlevade</option>
				      <option value="Itabira">Itabira</option>
                      <option value="São Gonçalo">São Gonçalo</option>
				      <option value="Belo Horizonte">Belo Horizonte</option>
				      <option value="Alvinópolis">Alvinópolis</option>
                      <option value="Outras">Outras</option>
			        </select>
				    <label>Estado:</label>
				    <select name="listaEstados" required="required" class="form-control">
				      <option value="AC">AC</option>
				      <option value="AL">AL</option>
				      <option value="AP">AP</option>
				      <option value="AM">AM</option>
				      <option value="BA">BA</option>
				      <option value="CE">CE</option>
				      <option value="DF">DF</option>
				      <option value="ES">ES</option>
				      <option value="GO">GO</option>
				      <option value="MA">MA</option>
				      <option value="MT">MT</option>
				      <option value="MS">MS</option>
				      <option value="MG">MG</option>
				      <option value="PA">PA</option>
				      <option value="PB">PB</option>
				      <option value="PR">PR</option>
				      <option value="PE">PE</option>
				      <option value="PI">PI</option>
				      <option value="RJ">RJ</option>
				      <option value="RN">RN</option>
				      <option value="RS">RS</option>
				      <option value="RO">RO</option>
				      <option value="RR">RR</option>
				      <option value="SC">SC</option>
				      <option value="SP">SP</option>
				      <option value="SE">SE</option>
				      <option value="TO">TO</option>
			        </select>
				    <label for="cep2">Cep:</label>
				    <input name="cep" type="text" required="required" class="form-control" id="cep">
				  </p>
		  </div>
		  </div>

			<div class="col-xs-2">
				<div class="form-group">
				  <div id="listaEstados"></div>
			  </div>
			</div>

			<div class="col-xs-6">
				<div class="form-group"></div>
			</div>

		<div class="form-group">
		  <label for="telefone">Telefone:</label>
				<input name="telefone" type="text" required="required" class="form-control" id="telefone">
				Celular:
				<input type="text" required="required" class="form-control" id="celular2">
				<label for="email3">Email:</label>
                <input name="email" type="text" required="required" class="form-control" id="email3">
                <label for="usuario3"><br>
                </label>
	      <div class="form-group"></div>
                <div class="form-group">
                  <label for="email2"></label>
                </div>
			</div>

			<div class="form-group">
			  <label for="usuario2"><br>
		      Usuário:</label>
                <input name="usuario" type="text" required="required" class="form-control" id="usuario2">
			</div>
<div class="form-group"></div>

			<div class="form-group"></div>

		<div class="form-group">
		  <label for="senha">Senha</label>
			:
			<input name="senha" type="password" required="required" class="form-control" id="senha" minlength="8" >
		  </div>

		<div class="form-group">
		  <label for="cSenha">Confirme a Senha</label>:
			<input name="cSenha" type="password" required="required" class="form-control" id="cSenha"  minlength="8">
		  </div>
 
			<div class="form-group">
			  <label><br>
		      Sexo</label>
			  :
			  <div class="radio">
			    <label><input type="radio" name="genero" value="Feminino"> Feminino</label>
			  </div>
				<div class="radio">
					<label><input type="radio" name="genero" value="Masculino" > Masculino</label>
				</div>
			</div>

			<div class="form-group">
				<label><br>
			    Área de Interesse:</label>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Web">Web</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="BD">BD</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Redes">Redes</label>
				</div>
			  <div class="checkbox">
					<label><input type="checkbox" name="area[]" value="Eng. Software">Eng. Software</label>
				</div>
			</div> 

			<div class="col-xs-6">
			  <p>
			    <input type="submit" class="btn btn-primary btn-block" formaction="validacao.php" value="Cadastrar">
			    <input type = "reset" value = "Limpar" class="btn btn-danger btn-block" />
		      </p>
			  <p>&nbsp;		      </p>
</div>
			<div class="col-xs-6"></div>
			<br><br>
	  </form>

</div>
	
</body>
</html>



