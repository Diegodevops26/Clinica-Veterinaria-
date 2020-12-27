
<!DOCTYPE html>
<html>

<head>   <style>   :root {      /* COLORS */     --primary: <?php echo htmlspecialchars($_SESSION['corPrimaria']); ?>;      --success: <?php echo htmlspecialchars($_SESSION['corSucesso']); ?>;     --failure: <?php echo htmlspecialchars($_SESSION['corFalha']); ?>;      --color-1: <?php echo htmlspecialchars($_SESSION['cor1']); ?>;     --color-2: <?php echo htmlspecialchars($_SESSION['cor2']); ?>;     --color-3: <?php echo htmlspecialchars($_SESSION['cor3']); ?>;     --color-4: <?php echo htmlspecialchars($_SESSION['cor4']); ?>;     --color-5: <?php echo htmlspecialchars($_SESSION['cor5']); ?>;   }        </style>
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/base.css">
  <link rel="stylesheet" href="../styles/medico.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="../js/script.js"></script>

  <title>Medico</title>
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

      <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Home.php">
        <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="../icon/home.svg">
        Home
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
  
  <div class="main-body home-body" id="home">
    <div class="seu-perfil-widget">
        
      <h1>
        Seu Perfil
      </h1>
      <form action ="processar8.php" method = "POST">

      <div class="card" id="dadosPessoais">
            <b>Nome do Médico:</b>
            <br>
            <span id="infoUserNome"></span>
            <br><br>
            
            <b>CRMV:</b>
            <br>
            <span id="infoUserCpf"></span>
            <br><br>

            <b>Data de Nascimento:</b>
            <br>
            <span id="infoUserData"></span>
            <br><br>
            
            <b>Endereço:</b>
            <br>
            <span id="infoUserEnd"></span>
            <br>
      </div>
    </div>
    <div class="prox-consulta-widget">
      <h1>Próxima Consulta</h1>
      <div class="card" id="proxCons">
        <b>Consulta:</b>
        <br>
        <span id="proxConsPacNome"></span>
        <br><br>
        <b>Dia e Hora:</b>
        <br>
        <span id="proxConsDia"></span>, às <span id="proxConsHora"></span>.
      </div>
    </div>
  </div>
  </form>
  <div class="main-footer">
    Selecione uma clínica:
    <select name="clinica" id="selectClinica">
    </select>
    
    <button type="button" onclick="mudaDeClinica();">Ir</button>

  </div>

</body>
</html>