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
        <li><a href="listar-func.php">Funcionários</a></li>
        <li class="divider"></li>
        <li class="active"><a href="listar-escala.php">Escalas</a></li>
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
        $query2 = mysqli_query ($conn, "
        SELECT * FROM funcionario
        INNER JOIN atividade
        ON funcionario.atividade = atividade.atvid; ") or die($conn->error);

        # Selecionando todas as escalas
        $query3 = mysqli_query ($conn, "SELECT * FROM escala") or die ($conn->error);

        # Quantidade de linhas na tabela Escala
        $qtd = $query3->num_rows;
     
        # Contador de horas semanais
        $turno = 0;
     
    if ($qtd > 0) {
      print "
      <h1>Lista de escala</h1>
      <p><b>$qtd</b> funcionario(s) na escala.</p>
      <li class='divider'></li>
      <table class='highlight responsive-table centered'>
        <thead>
          <tr>
              <th>Funcionário</th>
              <th>Atividade</th>
              <th>Entrada</th>
              <th>Saída</th>
              <th>Turno</th>
              <th>Reunião</th>
              <th>Ações</th>
          </tr>
        </thead>";
        while ($row = $query2->fetch_assoc() +
               $row = $query3->fetch_assoc()
            ){
                $turno = $turno + $row['turno'];
                print "<tbody>";
                  print "<tr>";
                    print "<td>".$row['nome']."</td>";
                    print "<td>".$row['atividade']."</td>";
                    print "<td>".$row['entrada']."h</td>";
                    print "<td>".$row['saida']."h</td>";
                    print "<td>".$row['turno']."h</td>";
                    print "<td>".$row['reuniao']."</td>";
                     print "<td>
                      <a href = \"editar-escala.php?escalaid='".$row["escalaid"]."'\">
                        <i class='material-icons cyan-text text-darken-2'>create</i>
                      </a>
                      <a href = \"crud-escala.php?acao=excluir&escalaid='".$row["escalaid"]."'\">
                        <i class='material-icons red-text text-darken-2'>close</i>
                      </a>
                      </td>";
                  print "</tr>";
                print "</tbody>";
              }
      print "</table>";
      print "<p class = 'right-align'> Horas semanais: <b>$turno h</b></p>";
    } else print "<p>Nenhuma escala encontrada.</p>";
    
      ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('.tooltipped').tooltip();
        });

    </script>
</body>

</html>
