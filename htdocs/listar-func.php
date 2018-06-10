<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alpha Escala</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Drop down -->
    <ul id="cadastro-dropdown" class="dropdown-content">
        <li><a href="cadastro-func.php">Funcionário</a></li>
        <li class="divider"></li>
        <li><a href="cadastro-escala.php">Escala</a></li>
    </ul>

    <ul id="listar-dropdown" class="dropdown-content">
        <li class="active"><a href="listar-func.php">Funcionários</a></li>
        <li class="divider"></li>
        <li><a href="listar-escala.php">Escalas</a></li>
    </ul>

    <!-- Navbar -->
    <nav style="background-color: crimson">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo">Alpha Escala</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a class="dropdown-trigger" href="#!" data-target="listar-dropdown">Listar &nbsp;<i class="material-icons right">arrow_drop_down</i></a></li>

                <li><a class="dropdown-trigger" href="#!" data-target="cadastro-dropdown">Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="tooltipped" href="../sair.php" data-position="bottom" data-tooltip="Deslogar"><i class="material-icons right">highlight_off</i></a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
    <?php include("config.php");
        
      
    # Inner Join da atividade do funcionário
    $query = mysqli_query ($conn, "
      SELECT * FROM funcionario
      INNER JOIN atividade
      ON funcionario.atividade = atividade.atvid; ") or die($conn->error);
      
	# Selecionando todas os funcionários
    $query2 = mysqli_query ($conn, "SELECT * FROM funcionario") or die ($conn->error);
	
    # Quantidade de linhas na tabela Funcionario
	$qtd = $query->num_rows;
     
    if ($qtd > 0) {
      print "
        <h1>Lista de funcionários</h1>
        <p><b>$qtd</b> funcionario(s) encontrados.</p>
        <li class='divider'></li>
        <table class='highlight responsive-table centered'>
          <thead>
            <tr>
                <th>Nome</th>
                <th>Profissão</th>
                <th>Telefone</th>
                <th>Atividade</th>
                <th>Matrícula</th>
                <th>Ações</th>
            </tr>
          </thead>";
      
        while ($row = $query->fetch_assoc()
              ){
          print "<tbody>";
            print "<tr>";
              print "<td>".$row['nome']."</td>";
              print "<td>".$row['profissao']."</td>";
              print "<td>".$row['telefone']."</td>";
              print "<td>".$row['atividade']."</td>";
              print "<td>".$row['matricula']."</td>";
              print "<td>
                  <a href = \"editar-func.php?matricula='".$row["matricula"]."'\">
                    <i class='material-icons cyan-text text-darken-2'>create</i>
                  </a>
                 <a href = \"crud-func.php?acao=excluir&matricula='".$row["matricula"]."'\">
                    <i class='material-icons red-text text-darken-2'>close</i>
                  </a>
              </td>";
            print "</tr>";
          print "</tbody>";
            
        }
      print "</table>";
    } else print "<p>Nenhum funcionário encontrado.</p>";
        
      ?>

          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Editar Funcionário</h4>
              <h6>$rowedit["nome"]</h6>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect green-text waves-green bold btn-flat">OK</a>
            </div>
          </div>
      
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('.modal').modal();
            $('.tooltipped').tooltip();
        });

    </script>
</body>

</html>
