
<!DOCTYPE html>
<html>

<head>  
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/base.css">
  <link rel="stylesheet" href="../styles/atendente.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <a class="main-header__logout-btn" href="#" onclick="Logout();">Logout</a>
      </div>
    </div>

    <nav class="main-header__nav-bar">

      <a class="main-header__nav-btn" href="Home.php">
        <img class="main-header__nav-icon svg" src="../icon/home.svg">
        Home
      </a>

      <a class="main-header__nav-btn" href="Cadastrar.php">
        <img class="main-header__nav-icon svg" src="../icon/cadastro.svg">
        Cadastrar
      </a>

      <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Confirmar.php">
        <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="../icon/calendar.svg">
        Confirmar <br> Consultas
      </a>

      <a class="main-header__nav-btn" href="Consultas.php">
        <img class="main-header__nav-icon svg" src="../icon/calendar.svg">
        Consultas
      </a>

      <a class="main-header__nav-btn" href="Historico.php">
        <img class="main-header__nav-icon svg" src="../icon/history.svg">
        Histórico
      </a>

      <a class="main-header__nav-btn" href="Perfil.php">
        <img class="main-header__nav-icon svg" src="../icon/profile.svg">
        Perfil
      </a>

    </nav>
  </header>
    
    
  <div class="main-body consultas-body">
    <div class="consultas-widget">
    
      <h1 class="consultas-widget__header">
        Confirmar Consultas
      </h1>

      <span class="consultas-widget__filter-toggle" id="filter-toggle">
        <img class="consultas-widget__filter-icon svg" src="../icon/pencil.svg">
      </span>

      <div class="consultas-widget__filter-box card" id="filter-box">
        <form class="consultas-widget__filter-form">
          <label>
            Médico(a) <br>
            <input type="text" name="filter-nome">
          </label>
          <label>
            Especialidade <br>
            <input type="text" name="filter-esp">
          </label>
        </form>
      </div>

    
      <div class="consultas-widget__body card">
          
        <span class="consultas-widget__list-header">
          <span>Dia</span>
          <span>Hora</span>
          <span>Médico(a)</span>
          <span>Paciente</span>
        </span>
          
        <div id="consultas-widget__list">

          
          <div class="consultas-widget__list-row accordion">
            
          </div>
          
        </div>
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