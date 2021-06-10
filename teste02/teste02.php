<?php
include_once("conexao.php");
$arquivo 	= $_FILES['arquivo']['name'];

$_UP['pasta'] = 'imagem/';
$_UP['extensoes'] = array('png', 'jpg', 'jpeg');
$nome_final = "abacate.png";
            $_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
            }else{
move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final);}