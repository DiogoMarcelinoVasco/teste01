<?php
include_once("conexao.php");
$doutor = $_POST["doutor"];
echo $doutor." ";
$nome = "'".$_POST["nome"]."'";
echo $nome." ";
$dt = $_POST["dt"];
echo $dt." ";
$horaio = $_POST["horaio"].":00";
echo $horaio." ";
$x= "1";
$sql01 = "SELECT idCliente FROM btmain.tbcliente where nome = ".$nome.";";
$result01 = $conn->query($sql01);
$row01 = $result01->fetch_assoc();
    echo $row01["idCliente"];
    $sql02 = "INSERT INTO `btmain`.`consuta` (`idconsuta`, `idCliente`, `iddoutor`, `date`) VALUES (null, '".$row01["idCliente"]."', '".$doutor."', '".$dt." ".$horaio."');";
    if ($conn->query($sql02) === TRUE) {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
        <script type=\"text/javascript\">
            alert(\"A consulta agendada com Sucesso.\");
        </script>";
        header("Location:agendar02.php");
      } else {
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
        <script type=\"text/javascript\">
            alert(\"nao foi possivel fazer o cadastro da consulta.\");
        </script>";
        header("Location:agendar02.php");
      }
?>