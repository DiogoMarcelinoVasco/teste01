<?php
$email = "'".$_POST["email"]."'";
$senha = "'".$_POST["senha"]."'";
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
    $sql01 = "SELECT C.idCliente,C.email,C.senha FROM btmain.tbcliente C where email = ".$email." AND  senha = ".$senha;
    $result01 = $conn->query($sql01);
    $row01 = $result01->fetch_assoc();
  if($row01["email"] != null)
  {
    header("Location:Clientes.php?idCliente= ".$row01["idCliente"]);
  }else 
  {
    header("Location:Login.php"); 
  }
?>