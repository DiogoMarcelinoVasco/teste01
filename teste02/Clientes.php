<!DOCTYPE html>
<html>
<head>
  <title>Clientes - NutriSist</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style-cliente.css">
<link rel="stylesheet" href="css/slyle-c2.css">
</head>
<body>
<div class="header" id="myHeader">
  <a href="#default" class="logo">NutriSist</a>
  <div class="header-right">
    <a href="#home">Inicio</a>
    <a href="#contact">Consultar</a>
    <a href="#contact">Agendar</a>
    <a href="#about">Logar</a>
  </div>
</div>
<!-- Grid principal da pagina -->
<div align="center" class="principal">

	<!-- Canto esquerdo da pagina -->
	<div>
<?php 
include_once("conexao.php");
	
		$idCliente= $_GET["idCliente"];
    $sql01 = "SELECT * FROM btmain.tbcliente a inner join btmain.tbcomcli b on (a.idcliente = b.idcliente) where a.idCliente =".$idCliente;
    $result01 = $conn->query($sql01);
    $row01 = $result01->fetch_assoc();	
	echo"
		<!-- Foto e Nome do Cliente -->
		<div>
			<img style='float: center' class='img_Cliente' src=imagem/".$row01["linkimagem"].">

			<div class='nome_Cliente'>".$row01["nome"]."</div><br>
		</div>

		<!-- Informações do cliente -->
		<div class='info_Cliente'>

			<!-- Cidade, Estado -->
			<ul>
				<dl>
					<dt><i class='fa fa-home' style='font-size:24px'></i></dt>
					<dd>".$row01["cidade"].", ".$row01["estado"]."</dd>
				</dl>
			</ul>

			<!-- E-mail do cliente -->
			<ul>
				<dl>
					<dt><i class='fa fa-envelope' style='font-size:24px'></i></dt>
					<dd>".$row01["email"]."</dd>
				</dl>
			</ul>

			<!-- Telefone do cliente -->
			<ul>
				<dl>
					<dt><i class='fa fa-phone' style='font-size:24px'></i></dt>
					<dd> ".$row01["numero"]."</dd>
				</dl>
			</ul>

			<!-- Data de nascimento ou idade -->
			<ul>
				<dl>
					<dt><i class='fa fa-birthday-cake' style='font-size:24px'></i></dt>
					<dd>";
					date_default_timezone_set('America/Sao_Paulo');
					$date = date('Y-m-d');
					$date = $date - $row01["datanac"];

					echo $row01["datanac"]." ( ".$date." anos) </dd>
				</dl>
			</ul>

			<!-- Altura do cliente -->
			<ul>
				<dl>
					<dt><i class='fa fa-child' style='font-size:24px'></i></dt>
					<dd>".$row01["altura"]."m</dd>
				</dl>
			</ul>

			<!-- Peso do cliente -->
			<ul>
				<dl>
					<dt><i class='fa fa-balance-scale' style='font-size:24px'></i></dt>
					<dd>".$row01["peso"]." Kg</dd>
				</dl>
			</ul>
		</div>

	</div>
	
	<!-- Canto direito da pagina -->
	<div>

		<!-- Anotações da consulta -->
  		<div class='titulo'><i class='fa fa-list' style='font-size:36px'></i>Notas da consulta </div>

  		<!-- Corpo -->
  		<div class='corpo' style='border-bottom: 1px solid #ddd;'>

  			<!-- SubTitulo da Anotacoes  -->
  			<div class='subTitulo'>Anotacoes do Nutricionista sobre o cliente</div>
  			<!-- Data da anotação -->
			";
			$sql02 = "SELECT * FROM btmain.anotacao where idcliente =".$idCliente ." order by anodate DESC ";
			$result02 = $conn->query($sql02);
			
			while($row02 = $result02->fetch_assoc()){

		echo"<div class='calendario'><i class='fa fa-calendar' style='font-size:24px'></i> ";
		echo "".data($row02["anodate"])."</div>

  			<!-- Texto -->
  			<div class='texto'>
  				<p>".$row02["anotacao"]."</p>
  			</div>
			  <br>

  		";
}
echo "</div><!-- Atividades Fisica do cliente -->
  		<div class='titulo'><i class='fa fa-bicycle' style='font-size:36px;'></i>Atividades Fisica</div>

  		<!-- Corpo -->
  		<div class='corpo'>
		  
		<!-- SubTitulo das Atividades Fisicas -->
  		<div class='subTitulo'>Praticas esportivas do cliente</div>";

			$sql03 = "SELECT * FROM btmain.tbatividade where idcliente = ".$idCliente ."  order by atidate DESC";
			$result03 = $conn->query($sql03);
			while($row03 = $result03->fetch_assoc()){

  		echo "
  			<!-- Data da anotação -->
  			<div class='calendario'><i class='fa fa-calendar' style='font-size:24px'></i> ";
		echo "".data($row03["atidate"])."</div>

  			<!-- Texto -->
  			<div class='texto'>
			  <p>".$row03["atividade"]."</p>
  			</div>
			  <br>
";}
	?>
  		</div>

	</div>

</div>
<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>