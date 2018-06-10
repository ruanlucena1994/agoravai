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
        <li><a href="listar-escala.php">Escalas</a></li>
    </ul>

    <!-- Navbar -->
    <nav style="background-color: crimson">
        <div class="nav-wrapper container">
            <a href="index.php" class="brand-logo">Alpha Escala</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="listar-dropdown">Listar &nbsp;<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="cadastro-dropdown">Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="tooltipped" href="../sair.php" data-position="bottom" data-tooltip="Deslogar"><i class="material-icons right">highlight_off</i></a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
          <?php include ("config.php");
            
            $sql = "SELECT * FROM escala WHERE escalaid=".$_REQUEST["escalaid"];

            $resultado = $conn->query($sql) or die($conn->error);

            $row = $resultado->fetch_assoc();
          ?>
          
          <h1>Editar Escala</h1>
           <div class="divider"></div>
           <?php include("config.php");
                # Selecionando os funcionários da tabela Funcionario
                $query = mysqli_query($conn, "SELECT * FROM funcionario") or die($conn->error);
                
                $sql = "SELECT * FROM escala WHERE escalaid=".$_REQUEST["escalaid"];

                $resultado = $conn->query($sql) or die($conn->error);

                $row = $resultado->fetch_assoc();
                ?>
                
            <form action="crud-escala.php?acao=editar&escalaid=<?php print $row["escalaid"]; ?>" method="POST">
                
                <div class="row">
                    
                    <div class='input-field col s12 m3' style='margin-top: 0'>
                        <p style='padding: 0; margin: 0'>Horário de entrada</p>
                        <p class='left clear'>
                            <label>
                <input value="7" name='entrada' type='radio' checked />
                <span style='padding-left: 25px; padding-right: 10px'>7h</span>
              </label>
                        </p>
                        <p class='left clear'>
                            <label>
                <input value="8" name='entrada' type='radio' />
                <span style='padding-left: 25px'>8h</span>
              </label>
                        </p>
                    </div>

                    <div class='input-field col s12 m3' style='margin-top: 0'>
                        <p style='padding: 0; margin: 0'>Horário de saída</p>
                        <p class='left clear'>
                            <label>
                <input value="18" name='saida' type='radio' checked />
                <span style='padding-left: 25px; padding-right: 10px'>18h</span>
              </label>
                        </p>
                        <p class='left clear'>
                            <label>
                <input value="19" name='saida' type='radio' />
                <span style='padding-left: 25px'>19h</span>
              </label>
                        </p>
                    </div>      
              </div>
              <!-- row end -->
              
              <div class="row">
                   
                    <div class='input-field col s12 m3' style='margin-top: 0'>
                        <p style='padding: 0; margin: 0'>Turno diário</p>
                        <p class='left clear'>
                            <label>
                <input value="4" name='turno' type='radio' checked />
                <span style='padding-left: 25px; padding-right: 10px'>4h</span>
              </label>
                        </p>
                        <p class='left clear'>
                            <label>
                <input value="5" name='turno' type='radio' />
                <span style='padding-left: 25px; padding-right: 10px'>5h</span>
              </label>
                        </p>
                        <p class='left clear'>
                            <label>
                <input value="6" name='turno' type='radio' />
                <span style='padding-left: 25px'>6h</span>
              </label>
                        </p>
                    </div>
                    
                    <div class='input-field col s12 m3' style='margin-top: 0'>
                        <p style='padding: 0; margin: 0'>Reunião</p>
                        <p class='left clear'>
                            <label>
                <input value="sim" name='reuniao' type='radio' checked />
                <span style='padding-left: 25px; padding-right: 10px'>Sim</span>
              </label>
                        </p>
                        <p class='left clear'>
                            <label>
                <input value="nao" name='reuniao' type='radio' />
                <span style='padding-left: 25px'>Não</span>
              </label>
                        </p>
                    </div>
                </div>
                <!-- row end -->

                <div class="form-group">
                    <button class='btn waves-effect waves-light' type="submit" name="action">Atualizar
                        <i class='material-icons left'>check</i></button>
                    <button class='btn waves-effect waves-light' type="button" onclick="location='listar-escala.php'">Voltar
                    <i class='material-icons left'>refresh</i></button>
                </div>
                    
            </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('select').formSelect();
            $('.datepicker').datepicker();
            $('.tooltipped').tooltip();
        });

    </script>
</body>
</html>