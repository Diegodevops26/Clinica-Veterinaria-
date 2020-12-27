

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

      <a class="main-header__nav-btn" href="Home.php">
        <img class="main-header__nav-icon svg" src="../icon/home.svg">
        Home
      </a>

      <a class="main-header__nav-btn" href="Marcar.php">
        <img class="main-header__nav-icon svg" src="../icon/calendar.svg">
        Marcar
      </a>

      <a class="main-header__nav-btn" href="Consultas.php">
        <img class="main-header__nav-icon svg" src="../icon/doctor.svg">
        Consultas
      </a>

      <a class="main-header__nav-btn" href="Historico.php">
        <img class="main-header__nav-icon svg" src="../icon/history.svg">
        Histórico
      </a>

      <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Perfil.php">
        <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="../icon/profile.svg">
        Perfil
      </a>

    </nav>
  </header>
    
    
  <div class="main-body perfil-body">
    <h1 class="perfil-header">Perfil</h1>

    <span class="perfil-edit" id="perfil-edit">
      <a href="EditarPerfil.php">
        <img class=" svg " src="../icon/pencil.svg">
      </a>
    </span>
    
    <div class="perfil-info">
      <div class="perfil-column-left">
        <div class="perfil-widget">

          <h2>Dados Pessoais</h2>
          <form action ="processar.php" method = "POST">

          <div class="card" id="dadosPessoais">
            <b>Nome do Proprietario do Animal:</b>
            <br>
            <span id="infoUserNomeProprietario">
            <br><br>

            <b>Nome  do Animal:</b>
            <br>
            <span id="infoUserNomeAnimal">
            <br><br>

            <b>CPF:</b>
            <br>
            <span id="infoUserCpf">
            <br><br>

            <b>Data de Nascimento:</b>
            <br>
            <span id="infoUserData">
            <br><br>
            
            <b>Endereço:</b>
            <br>
            <span id="infoUserEnd">
          
          </div>

            
        </div>
          
      </div>

      <div class="perfil-column-right">
        <div class="perfil-widget">
          <h2>Contato</h2>
          <div class="card" id="contato">
            
            <b>Email:</b>
            <br>
            <span id="infoUserEmail">
            <br><br>
            <b>Telefone 1:</b>
            <br>
            <span id="infoUserTel">
            <br><br>
            <b>Telefone 2:</b>
            <br>
            <span id="infoUserTel">
            <br>
            
          </div>
        </div>
        <div class="perfil-widget">
          <h2>Dados Médicos</h2>
          <div class="card" id="dadosMedicos">
            
            <b>Relatório:</b>
            <br>
            <span id="infoUserRelatório">
            <br><br>

            <b>Tipo Vacinação:</b>
            <br>
            <span id="infoUserVacinação">
            <br>
</form>
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

<script>
  function inicializa()
  {
    SvgInliner();
    carregaClinicas();
  }
  
</script>

</html>