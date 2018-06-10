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
        <li class="active"><a href="cadastro-func.php">Funcionário</a></li>
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
                <li class="active"><a class="dropdown-trigger" href="#!" data-target="cadastro-dropdown">Cadastro<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="tooltipped" href="../sair.php" data-position="bottom" data-tooltip="Deslogar"><i class="material-icons right">highlight_off</i></a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <h1 class="header">Cadastro de funcionário</h1>
        <li class="divider"></li>
        <div class="row">
            <form class="col s12" action="crud-func.php?acao=add" method="POST">

                <div class="row">
                    <div class="input-field col s12 m6 l4">
                        <input name="nome" id="nome" type="text" class="validate">
                        <label for="nome">Nome completo</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <input name="telefone" id="telefone" type="number" class="validate">
                        <label for="telefone">Telefone</label>
                    </div>
                </div>
                <!-- row end -->

                <div class="row">
                    <div class="input-field col s12 m6 l4">
                        <select name="profissao">
                          <option value="" selected disabled>Escolha a profissão</option>
                          <option value="Medico">Médico</option>
                          <option value="Enfermeiro">Enfermeiro</option>
                          <option value="Tecnico">Técnico</option>
                        </select>
                        <label>Profissão</label>
                    </div>

                    <div class="input-field col s12 m6 l4">
                        <select name="atividade">
                          <option value="" selected disabled>Escolha a atividade</option>
                          <option value="1">Atendimento Domiciliar</option>
                          <option value="2">Atendimento UBS</option>
                          <option value="3">Atendimento Sala de Vacina</option>
                          <option value="4">Retaguarda de urgência</option>
                          <option value="5">Visita Domiciliar</option>
                          <option value="6">Acolhimento</option>
                        </select>
                        <label>Atividade</label>
                    </div>

                </div>
                <!-- row end -->

                <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>

            </form>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            $('select').formSelect();
            $('.tooltipped').tooltip();
        });

    </script>
</body>

</html>
