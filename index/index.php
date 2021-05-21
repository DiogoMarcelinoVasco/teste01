<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
<title>Teste</title>
</head>
<body>
<br>
<div class="center w3-container w3-center" style="width: 30%; "> 
    <form action="login.php" method="post">
    <label for="fname">Usuario</label>
    <input type="text" id="usuario" name="usuario" placeholder="Seu usuario">
    <label for="fname">Senha</label>
    <input type="text" id="senha" name="senha" placeholder="Sua senha">
    <input type="submit" value="Entrar">
  </form>
  </div> 
  </div>
</body>
</html>