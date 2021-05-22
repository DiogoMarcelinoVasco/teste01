<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>teste01</title>
</head>
<style>   
a{
  width: 10%;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<body>
<?php
$usuario = "'".$_POST["usuario"]."'";
$senha = $_POST["senha"];
if($usuario == ""){

}
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "btmain";
$port = "3308";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 //conexão com banco
    $sql01 = "SELECT C.idCliente,C.nome,C.senha FROM btmain.tbcliente C where nome = ".$usuario;
    $result01 = $conn->query($sql01);
    $row01 = $result01->fetch_assoc();
   if($usuario == "''"){
    echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
        <p class='w3-xlarge'>O usuario esta vazio</p>
        <a href='index.php' class='w3-button w3-green'>Voltar</a>
    </header>
";
}elseif($senha == ""){
    echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
        <p class='w3-xlarge'>A senha esta vazia</p>
        <a href='index.php' class='w3-button w3-green'>Voltar</a>
    </header>

";
}elseif($senha == $row01["senha"]){
    echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
    <p class='w3-xlarge'>Usuario e senha correto</p>
    <a href='index.php' class='w3-button w3-green'>Continuar</a>
    </header>";


}else{
echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
        <p class='w3-xlarge'>As informaçoes estão erradas</p>
        <a href='index.php' class='w3-button w3-green'>Voltar</a>
    </header>

";}
?>
</body>
</html>
