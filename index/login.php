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
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
if($senha == "10" && $usuario == "10"){
    echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
    <p class='w3-xlarge'>Usuario e senha correto</p>
    <a href='index.php' class='w3-button w3-green'>Continuar</a>
    </header>";

}else{
echo "
    <header class='w3-container w3-center' style='padding:228.5px 16px'>
        <p class='w3-xlarge'>Sua conta não esta certa</p>
        <a href='index.php' class='w3-button w3-green'>Voltar</a>
    </header>

";}
?>


</body>
</html>