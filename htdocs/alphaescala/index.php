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
            <a href="#" class="brand-logo">Alpha Escala</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="listar-dropdown">Listar &nbsp;<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="cadastro-dropdown">Cadastrar<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="tooltipped" href="../sair.php" data-position="bottom" data-tooltip="Deslogar"><i class="material-icons right">highlight_off</i></a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
          
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('.tooltipped').tooltip();
        });

    </script>

    <?php
    include("config.php");
  ?>
     <p>
	      
	               
                             
                                
                                
                                    
                                 
                                   								 
	 </p>
	<center>
	<a href="manualdousuarioalpha.pdf" target="_blank"  ><img src="img/capamanual.jpg" alt="" height=”200” width=”200”>.</a>
	<p>
	Clique na imagem para baixar o pdf.
	</p>
	
	</center>
	
</body>

</html>
