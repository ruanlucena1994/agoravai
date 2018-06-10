<?php include("config.php");
	$nome = @$_REQUEST["nome"];
	$profissao = @$_REQUEST["profissao"];
	$atividade = @$_REQUEST["atividade"];
	$telefone = @$_REQUEST["telefone"];
	
	switch($_REQUEST["acao"]){
		case "add":
			$sql = "INSERT INTO
            funcionario (nome, profissao, atividade, telefone) 
            VALUES ('{$nome}', '{$profissao}', '{$atividade}', '{$telefone}')";
	
			$resultado = $conn->query($sql);
			
			if($resultado==true){
                header("Location: http://localhost/alphaescala/listar-func.php");
                die();
			}else{
				print "<p>Erro .</p>" .$sql. "<br>" .mysqli_error($conn);
			}
		break;
		case "editar":
			$sql = "UPDATE funcionario SET nome='{$nome}', profissao = '{$profissao}', atividade = '{$atividade}', telefone = '{$telefone}'
            WHERE matricula=".$_REQUEST["matricula"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
                header("Location: http://localhost/alphaescala/listar-func.php");
			}else{
				print "<p>Erro .</p>" .$sql. "<br>" .mysqli_error($conn);
			}
		break;
		case "excluir":
			$sql = "DELETE FROM funcionario WHERE matricula=".$_REQUEST["matricula"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
                header("Location: http://localhost/alphaescala/listar-func.php");
			}else{
				print "<p>Erro .</p>" .$sql. "<br>" .mysqli_error($conn);
			}
		break;
	}

?>