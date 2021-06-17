<!DOCTYPE html>
<html>
<head>
  <title>Clientes - NutriSist</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

* {
	
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif ;

}

/* Grid principal do site */
.principal {
	display: grid;
	grid-template-columns: 340px 660px;
	grid-gap: 10px;
	padding: 10px;
	margin: 10px;
	margin-top: 30px;
	margin-bottom: 30px;
}

.principal > div {
	border-radius: 10px 10px 10px 10px; 
	border:1px solid #066a75;
}

/* Foto do cliente */
.img_Cliente {
	width: 250px;
	height: 250px;
	border-radius: 50%;
	padding: 10px;
}

/* Nome do cliente */
.nome_Cliente {
	font-size: 24px;
	font-weight: bold;
	text-align: center;
	color:#000;
}

.info_Cliente {
	margin: 10px;
	color:#000;
}

ul {
	padding: 3px;
}

dt 
{	display: block;
	font-weight: bold;
}

dd {
	display: block;
	margin-inline-start: 20px;
}

 dl {
	padding: 6px;
	display: flex;
	align-items: flex-start;
	font-size: 15px;
	line-height: 24px;
}

i {
	margin-left: 10px;
	margin-right: 20px;
	color: #066a75;
}

.titulo {
	font-size: 30px;
	font-weight: bold;
	text-align: left;
	line-height: 40px;
	margin: 10px;
	padding: 20px;
	padding-bottom: 0;
	margin-bottom: 0;
	color: #066a75;
}

.corpo {
	padding: 20px;
	margin: 10px;
	margin-left: 50px;
	text-align: left;
}
.calendario{color: #066a75;}

.subTitulo, .calendario {
	font-size: 20px;
	font-weight: bold;
	text-align: left;
	line-height: 30px;
}

.subTitulo {
	color: gray;
	padding-bottom: 5px;
	margin: 10px;
	margin-top: 0;
}

.texto {
	padding: 0px;
	margin: 10px;
	font-size: 15px;
	line-height: 24px;
	display: block;
	width: 100%;
}
form {
	font-size: 16px;
}

.content {
	width: 600px;
	margin: 20px auto 0 auto;
}

.row {
	padding: 5px;
}


fieldset {
	padding: 20px;
	margin: 20px;
	border-radius: 5px;
}

legend {
	font-size: 22px;
	font-weight: bold;
}

label:not([for="masculino"],[for="feminino"]) {
	display: inline-block;
	width: 100px;
}

input {
	outline: none;
	padding: 8px 12px;
	border-radius: 5px;
}

input[id="nome"], input[id="email"] {
	width: 300px;
}

input[id="altura"], input[id="peso"] {
	width: 100px;
}

input[id="telefone"], input[id="dtNasc"] {
	width: 150px;
}

input[type="reset"], input[type="submit"] {
	width: 100%;
  	background-color: #000;
  	color: #fff;
  	padding: 14px 20px;
  	margin: 8px 0;
  	font-weight: bold;
  	font-size: 14px;
  	border: none;
  	border-radius: 4px;
  	cursor: pointer;
}
input[id="genero"], select {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
  }
  .header {
	overflow: hidden;
	padding: 12px 10px;
	background-color:  #066a75;	
  }
  
  .header a {
	float: left;
	color: black;
	text-align: center;
	padding: 12px;
	text-decoration: none;
	font-size: 14px; 
	line-height: 20px;
	border-radius: 4px;
	color: #fff;
	font-weight: bold;
  }
  
  .header a.logo {
	font-size: 32px;
	letter-spacing: 3px;
	font-weight: bold;
	color: #fff;
  }
  
  .header a:hover {
	background-color: #ddd;
	color: black;
  }
  
  .header-right {
	float: right;
  }
  
  @media screen and (max-width: 500px) {
	.header a {
	  float: none;
	  display: block;
	  text-align: left;
	}
	
	.header-right {
	  float: none;
	}
  }
  .footer {
	 left: 0;
	 bottom: 0;
	 width: 100%;
	 height: 100px;
	 background-color: #066a75;;
	 color: white;
	 text-align: center;
	 font-weight: bold;
	 font-size: 18px; 
  }
</style>
<body>
<div class="header" id="myHeader">
  <a href="#default" class="logo">NutriSist</a>
  <div class="header-right">
    <a href="#home">Inicio</a>
    <a href="#contact">Consultar</a>
    <a href="agendar01.php">Agendar</a>
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
  		<div class='titulo'><i class='fa fa-list' style='font-size:36px'></i>Lembretes</div>

  		<!-- Corpo -->
  		<div class='corpo' style='border-bottom: 1px solid #ddd;'>
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
  		<div class='corpo'>";

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