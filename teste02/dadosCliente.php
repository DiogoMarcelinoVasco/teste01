<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style-cliente-2.css">
	<title>Document</title>
</head>
<body>
<div class="content"> 
<form method="POST" action="cadastrar.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Dados do cliente</legend>
			<div class="row">
				<label for="nome">Nome</label><br>
				<input type="text" id="nome" name="nome" placeholder="Digite seu nome completo..." autocomplete="off" required>
			</div>
			<div class="row">
				<label for="email">E-mail</label><br>
				<input type="email" id="email" name="email" placeholder="Exemplo@e-mail.com" autocomplete="off">
			</div>
			<div class="row">
				<label for="email">Estado</label><br>
				<input type="text" id="nome" name="estado" placeholder="SP" autocomplete="off">
			</div>
			<div class="row">
				<label for="email">Cidade</label><br>
				<input type="text" id="nome" name="cidade" placeholder="Barretos" autocomplete="off">
			</div>
			<div class="row">
				<label for="email">Telefone</label>
				<input type="text" id="telefone" name="tell" placeholder="(17) 0000-0000" autocomplete="off">
			</div>
			<div class="row">
				<label for="dtNasc">Aniversário</label>
				<input type="date" id="dtNasc" name="dtNasc" required>
			</div>
			<div class="row">
				<label>Gênero</label>
				<input type="radio" value="Masculino" id="masculino" name="sexo">
				<label>Masculino</label> 
				<BR> 
				<input type="radio" value="Feminino" id="feminino" name="sexo">
				<label>Feminino</label>
			</div>
			<div class="row">
				<label for="altura">Altura</label>
				<input type="float" id="altura" name="altura" placeholder="Ex (1.68 m)" autocomplete="off" required>
			</div>
			<div class="row">
				<label for="peso">Peso</label>
				<input type="float" id="peso" name="peso" placeholder="Ex (67 Kg)" autocomplete="off" required>
			</div>
			<div class="row">
				<label for="peso">Senha</label>
				<input type="senha" id="peso" name="senha" placeholder="Ex (1234)" autocomplete="off" required>
			</div>
			<div class="row">
				<input type="file" id="foto" name="foto">
			</div>
			<input type="reset">
			<input type="submit">
		</fieldset>
	</form>
</div>
</body>
</html>