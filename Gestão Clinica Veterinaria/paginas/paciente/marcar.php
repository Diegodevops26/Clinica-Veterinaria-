
<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/base.css">
  <link rel="stylesheet" href="../styles/paciente.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="../js/script.js"></script>

  <title>Paciente</title>
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

            <a class="main-header__nav-btn main-header__nav-btn--currentPage" href="Marcar.php">
                <img class="main-header__nav-icon main-header__nav-icon--currentPage svg" src="../icon/calendar.svg">
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

            <a class="main-header__nav-btn" href="Perfil.php">
                <img class="main-header__nav-icon svg" src="../icon/profile.svg">
                Perfil
            </a>

        </nav>
    </header>
  
  
    <div class="main-body marcar-body">
        <h1>
            Marcar Consulta
        </h1>
        <br>
        <div class="medico-select-widget">
            <h2>
                Selecione um médico:
            </h2>
            <div class="card">
            
                <form>
                    <label>
                        Médico(a) <br>
                        <input type="text" name="filter-nome" id="filter-nome" autocomplete="off">
                    </label>
                </form>

                <form class="medico-select-widget__medicos" id="medico-select-widget__medicos">
                    <label>
                        <input type="radio" name="medico" class="medico-select-widget__medico-radio">
                    </label>
                </div>

        </div>
        <br>
        <form action ="processar2.php" method = "POST">
        <div class="horario-select-widget">
            <h2>
                Selecione um dia e horário:
            </h2>
                <div class="horario-select-widget__calendar" onclick="MostraSelecionados()">
                    <div id="datepicker" class="card"></div>
                </div>
                <table class="table horario-select-widget__agenda" id="horario-select-widget__agenda">
                    <tr>
                        <th></th>
                        <th>
                            Seg
                            <h1 id="cal-seg"></h1>
                        </th>
                        <th>
                            Ter
                            <h1 id="cal-ter"></h1>
                        </th>
                        <th>
                            Qua
                            <h1 id="cal-qua"></h1>
                        </th>
                        <th>
                            Qui
                            <h1 id="cal-qui"></h1>
                        </th>
                        <th>
                            Sex
                            <h1 id="cal-sex"></h1>
                        </th>
                    </tr>
                    <tr>
                        <td>08:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>08:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>09:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>09:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>10:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>11:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>12:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>13:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>13:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>14:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>14:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>15:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>15:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>16:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>16:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>17:00</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>17:30</td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input type="radio" name="horario" class="horario-select-widget__horario-radio" value="0-00" onclick="MostraSelecionados()" disabled>
                                <div  class="horario-select-widget__horario-card" onclick="MostraSelecionados()">
                                </div>
                            </label>
                        </td>
                    </tr>
        <br>
        <div class="confirmar-consulta-widget">
            <h2>
                Confirme as informações:
            </h2>

            <div class="card confirmar-consulta-widget__card">
                <b>Médico(a):</b>
                <br>
                <span id="med-selecionado">Nenhum selecionado.</span>
                <br><br>
                <>Dia e Hora:</>
                <br>
                <span id="hora-selecionado">Nenhum selecionado.</span>
                <br><br>
                <button id="marcar-btn" type="button" onclick="return MarcaConsulta()" disabled>Marcar Consulta</button>
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
