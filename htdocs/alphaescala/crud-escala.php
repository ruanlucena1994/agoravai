<?php include("config.php");
	$funcionario = @$_REQUEST["funcionario"];
	$atividade = @$_REQUEST["atividade"];
	$entrada = @$_POST["entrada"];
	$saida = @$_POST["saida"];
	$turno = @$_POST["turno"];
    $reuniao = @$_POST["reuniao"];
	
	switch($_REQUEST["acao"]){
		case "add":
            $sql = "INSERT INTO
            escala (funcionario, entrada, saida, turno, reuniao)
            VALUES ({$funcionario}, {$entrada}, {$saida}, {$turno}, '{$reuniao}')";
	
			$resultado = $conn->query($sql);
			
			if ($resultado==true) {
                header("Location: http://localhost/alphaescala/listar-escala.php");
                die();
			}else{
				print "<p>Erro .</p>" .$sql. "<br>" .mysqli_error($conn);
			}
		break;
		case "editar":
			$sql = "UPDATE escala SET entrada = '{$entrada}', saida = '{$saida}', reuniao = '{$reuniao}', turno = '{$turno}'
            WHERE escalaid=".$_REQUEST["escalaid"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
                header("Location: http://localhost/alphaescala/listar-escala.php");
			}else{
				print "<p>Erro .</p>" .$sql. "<br>" .mysqli_error($conn);
			}
		break;
		case "excluir":
			$sql = "DELETE FROM escala WHERE escalaid=".$_REQUEST["escalaid"];
			
			$resultado = $conn->query($sql);
			
			if($resultado==true){
				header("Location: http://localhost/alphaescala/listar-escala.php");
			}else{
				print "<div class='alert alert-danger'>Erro.</div>";
			}
		break;
	}

?>