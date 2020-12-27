<!DOCTYPE html>
<html>

<head> 
  <link rel="stylesheet" href="../styles/cadastramentoOnline.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../js/script.js"></script>

  <title>Cadastro</title>
  <meta charset = "UTF-8">
</head>


<body onload="inicializa()">

    <h1 class="cadastro-header">Cadastro</h1>

    
    <div class="main-body cadastro-body">
    
        <div class="cadastro-tipo">
            <a class="cadastro-tipo-widget__option cadastro-tipo-widget__option--selected card" href="CadastroPaciente.php"> Cadastrar Paciente </a>
            <a class="cadastro-tipo-widget__option card" href="CadastroMedico.php"> Cadastrar Médico </a>
            <a class="cadastro-tipo-widget__option card" href="CadastroAtendente.php"> Cadastrar Atendente </a>
            <a class="main-header__logout-btn" href="../Login.php" onclick="Logout();">Logout</a>
        </div>
        
        <div class="cadastro-info">
        <div class="cadastro-column-left">
            <div class="cadastro-widget">

            <h2>Dados Pessoais</h2>
            <div class="card" id="dadosPessoais">
            <form action ="processar.php" method = "POST">

                    <b>Nome do Proprietario do Animal:</b>
                    <br>
                    <input type="text" id="nome"><br>
                    <br>

                    <b>Nome do Animal:</b>
                    <br>
                    <input type="text" id="nome"><br>
                    <br>


                    <b>CPF:</b>
                    <br>
                    <input type="text" id="cpf"><br>
                    <br>

                    <b>Data de Nascimento:</b>
                    <br>
                    <input type="date" id="bday" max="3000-12-31"><br>
                    <br>

                    <b>Gênero:</b>
                    <br>
                    <input type="text" id="genero"><br>
                    <br>
                    
                    <b>CEP:</b>
                    <br>
                    <input type="text" id="CEP"><br>
                    <br>

                    <b>Endereço:</b>
                    <br>
                    <input type="text" id="endereco"><br>
                    <br>

                    <b>Defina a Senha:</b>
                    <br>
                    <input type="password" id="senha"><br>
                    <br>
            </div>
            </div>
        </div>

        <div class="cadastro-column-right">
            <div class="cadastro-widget">
                <h2>Contato</h2>
                <div class="card" id="contato">
                        <b>Email:</b>
                        <br>
                        <input type="text" id="email"><br>
                        <br>
                        <b>Telefone 1:</b>
                        <br>
                        <input type="text" id="telefone1"><br>
                        <br>
                        <b>Telefone 2:</b>
                        <br>
                        <input type="text" id="telefone2"><br>
                        <br>
                </div>
            </div>
        </div>
    </div>
    </form>
        <div class="centro">
            <input type="button" value="Submit" onclick="salvaBanco()"><br>
        </div>
</body>
</html>