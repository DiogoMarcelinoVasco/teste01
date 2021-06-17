<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif ;
}


form {
    font-size: 16px;
}

.content {
    width: 580px;
    margin: 20px auto 0 auto;
    color: #066a75;
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

input[type="reset"], input[type="submit"] {
    width: 100%;
      background-color:#066a75;
      color: #fff;
      padding: 14px 20px;
      margin: 8px 0;
      font-weight: bold;
      font-size: 14px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
}

input, select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
</style>
</head>
<body>
<div class="content"> 
<form action="agendar02.php" method="post">
        <fieldset>
            <legend>Marcar consulta</legend>
            <div class="row">
            <label for="doutor">Doutor</label><br>
            <select id="doutor" name="doutor">
            
            <?php
include_once("conexao.php");
$sql01 = "SELECT * FROM btmain.doutor;";
$result01 = $conn->query($sql01);
while($row01 = $result01->fetch_assoc()){
    echo $row01["nome"];
    echo "<option value='".$row01["iddoutor"]."'>Dr. ".$row01["nome"]."</option>";
}


?>
            
            </select><br>
            </div>
            <div class="row">
                <label for="nome">Nome</label><br>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo..." autocomplete="off" required>
            </div>
            <div class="row">
                <label for="dt">Data</label>
                <input type="date" id="dt" name="dt" required>
                <label for="horaio">Horário</label>
                <input type="time" id="horaio" name="horaio" required>
            </div>
            <input type="reset">
            <input type="submit">
        </fieldset>
    </form>
</div>
    
</body>
</html>