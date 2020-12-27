<!DOCTYPE html>
<html>

<head>   
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/base.css">
  <link rel="stylesheet" href="../styles/atendente.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="../js/script.js"></script>

  <title>Atendente</title>
  <meta charset = "UTF-8">
</head>


<body>
    <header class="main-header">
        <div class="main-header__top-bar">
            <h1 class="main-header__logo"></h1>
            <div class="main-header__user">
                <span class="main-header__username" id="headerUserNome"></span>
                <a class="main-header__logout-btn" href="../Login.php" onclick="Logout();">Logout</a>
            </div>
        </div>

        <nav class="main-header__nav-bar">

            <a class="main-header__nav-btn" href="Home.php">
                <img class="main-header__nav-icon svg" src="/paginas/icon/home.svg">
                Home
            </a>

            <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Cadastrar.php">
                <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="/paginas/icon/calendar.svg">
                Cadastrar
            </a>

            <a class="main-header__nav-btn" href="Confirmar.php">
                <img class="main-header__nav-icon svg" src="/paginas/icon/calendar.svg">
                Confirmar <br> Consultas
            </a>

            <a class="main-header__nav-btn" href="Consultas.php">
                <img class="main-header__nav-icon svg" src="/paginas/icon/veterinario.svg">
                Consultas
            </a>

            <a class="main-header__nav-btn" href="Historico.php">
                <img class="main-header__nav-icon svg" src="/paginas/icon/history.svg">
                Histórico
            </a>

            <a class="main-header__nav-btn" href="Perfil.php">
                <img class="main-header__nav-icon svg" src="/paginas/icon/profile.svg">
                Perfil
            </a>

        </nav>
    </header>
  
  
    <div class="main-body cadastrar-body">
        
        <h1>
            Cadastrar
        </h1>
        <br>

        <div class="cadastro-tipo-widget" >
            <a class="cadastro-tipo-widget__option card" href="Cadastrar.php"> Cadastrar Médico </a>
            <a class="cadastro-tipo-widget__option cadastro-tipo-widget__option--selected card" href="CadastrarAtendente.php"> Cadastrar Atendente </a>

        </div>

        <div class="medico-select-widget">
            <h2>
                Selecione um atendente:
            </h2>
            <div class="card">
            
                <form>
                    <label>
                        Atendente <br>
                        <input type="text" name="filter-nome" id="filter-nome" autocomplete="off">
                    </label>
                </form>

                <form class="atendente-select-widget__atendentes" id="atendente-select-widget__atendentes">
                    <label>
                        <input type="radio" name="atendente" class="atendente-select-widget__atendente-radio">
                    </label>
                </div>

        </div>
        <br>
        <div class="confirmar-cadastro-widget">
            <h2>
                Confirme as informações:
            </h2>

            <div class="card confirmar-cadastro__card">
                <b>Atendente:</b>
                <br>
                <span id="ate-selecionado">Nenhum selecionado.</span>
                <br><br>
                <button id="cadastra-atendente-btn" type="button" onclick="CadastraAtendente();" disabled>Cadastrar na Clínica</button>
            </div>
        </div>
    </div>


    <div class="main-footer">
    Selecione uma clínica:
    <select name="clinica" id="selectClinica">
    </select>
    
    <button type="button" onclick="mudaDeClinica();">Ir</button>

  </div>
</body> 
</html>