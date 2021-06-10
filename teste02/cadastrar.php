<?php 
include_once("conexao.php");
$Nome = $_POST["nome"];
echo $Nome." ";
$email = $_POST["email"];
echo $email." ";
$Estado = $_POST["estado"];
echo $Estado." ";
$Cidade = $_POST["cidade"];
echo $Cidade." ";
$tell = $_POST["tell"];
echo $tell." ";
$dtNasc = $_POST["dtNasc"];
echo $dtNasc." ";
$sexo = $_POST["sexo"];
echo $sexo." ";
$altura = $_POST["altura"];
echo $altura." ";
$peso = $_POST["peso"];
echo $peso;
$sexo =$_POST["sexo"];
echo $sexo." ";
$senha = $_POST["senha"];
echo $senha." ";
$arquivo 	= $_FILES['foto']['name'];
$_UP['pasta'] = 'imagem/';
$_UP['extensoes'] = array('png', 'jpg', 'jpeg');
$nome_final = $Nome.".png";
if(move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta']. $nome_final)){
mysqli_query($conn, "INSERT INTO `btmain`.`tbcliente` 
(`idCliente`,`nome`, `cidade`, `estado`, `datanac`, 
`peso`, `altura`, `senha`, `email`, `linkimagem`,`sexo`)
VALUES (null,'".$Nome."', '".$Cidade."', '".$Estado."', '".$dtNasc."', '".$peso."',
 '".$altura."', '".$senha."', '".$email."', '".$nome_final."','".$sexo."');");

$sql02 = "SELECT * FROM btmain.tbcliente where email ='".$email."'";
$result02 = $conn->query($sql02);
$row02 = $result02->fetch_assoc();

mysqli_query($conn, "INSERT INTO `btmain`.`tbcomcli` (`idtbcomcli`, `idCliente`, `numero`) VALUES (null, '".$row02["idCliente"]."', '".$tell."');");
header("Location:dadosCliente.php");
}
