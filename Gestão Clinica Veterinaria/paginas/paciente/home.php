
<!DOCTYPE html>

<html>

<head>  
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/base.css">
  <link rel="stylesheet" href="../styles/paciente.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../js/script.js"></script>

  <title>Paciente</title>
  <meta charset = "UTF-8">
</head>


<body onload="inicializa()">
  <header class="main-header">
    <div class="main-header__top-bar">
      <h1 class="main-header__logo"></h1>
      <div class="main-header__user">
        <span class="main-header__username" id="headerUserNome"></span>
        <a class="main-header__logout-btn" href="#" onclick="Logout();">Logout</a>
      </div>
    </div>

    <nav class="main-header__nav-bar">

      <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Home.php">
        <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="../icon/home.svg">
        Home
      </a>

      <a class="main-header__nav-btn" href="Marcar.php">
        <img class="main-header__nav-icon svg" src="../icon/calendar.svg">
        Marcar
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
  
  
  <div class="main-body home-body">
    <div class="seu-perfil-widget">
        
      <h1>
        Seu Perfil
      </h1>
      <form action ="processar3.php" method = "POST">
      <div class="card" id="paciente">
        <b>Nome do proprietario do Animal:</b>
        <br>
        <span id="infoUserNome"></span>
        <br><br>
        <b>Nome do Animal:</b>
        <br>
        <span id="infoUserNome"></span>
        <br><br>
        <b>Email:</b>
        <br>
        <span id="infoUserEmail"></span>
        <br><br>
        <b>Endereço:</b>
        <br>
        <span id="infoUserEnd"></span>
        <br>
      </div>
    </div>
    <div class="prox-consulta-widget">
      <h1>Próxima Consulta</h1>
      <div class="card" id="consulta">
        <b>Médico(a):</b>
        <br>
        <span id="proxConsMedNome">Paula Guedes</span>
        <br><br>
        <b>Especialidade:</b>
        <br>
        <span id="proxConsMedEsp">Veterinario</span>
        <br><br>
        <b>Dia e Hora:</b>
        <br>
        <span id="proxConsDia">01/01/2021</span>, às <span id="proxConsHora">18:00h</span>
      </div>
    </div>
  </div>

  <div class="main-footer">
    Selecione uma clínica:
    <select name="clinica" id="selectClinica">
    </select>
    
    <button type="button" onclick="mudaDeClinica();">Ir</button>
</form>
  </div>
</body>
</html>