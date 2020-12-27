<!DOCTYPE html>
<html>

<head> 
  <link href="https://fonts.googleapis.com/css?family=Fira Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../styles/cadastramentoOnline.css">
  <!--<link rel="stylesheet" href="../css/Paciente.css">-->
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
            <a class="cadastro-tipo-widget__option card" href="CadastroPaciente.php"> Cadastrar Paciente </a>
            <a class="cadastro-tipo-widget__option cadastro-tipo-widget__option--selected card" href="CadastroMedico.php"> Cadastrar Médico </a>
            <a class="cadastro-tipo-widget__option card" href="CadastroAtendente.php"> Cadastrar Atendente </a>
            <a class="main-header__logout-btn" href="../Login.php" onclick="Logout();">Logout</a>
        </div>
        
        <div class="cadastro-info">
        <div class="cadastro-column-left">
            <div class="cadastro-widget">

            <h2>Dados Pessoais</h2>
            <div class="card" id="dadosPessoais">
                <form action="">
                    <b>Nome:</b>
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

                </form>
            </div>

                
            </div>
            
        </div>

        <div class="cadastro-column-right">
            <div class="cadastro-widget">
                <h2>Contato</h2>
                <div class="card" id="contato">
                    <form action="">  
                    
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
                    
                    </form>
                </div>
            </div>
            
            <div class="cadastro-widget">
                <h2>Dados Médicos</h2>    
                <form action="" id="dadosMedicos">
                <form action="" id="dadosMedicos">
                  <br>CRMV<br>
                  <input type="text" id="crmv"><br>
                  <br>
                <br><br>    
                </form>  
                </div>
            </div>
        </div>
        </div>

        <div class="centro">
            <input type="button" value="Submit" onclick="salvaBanco()"><br>
        </div>
    </div>
        
</body>

<script>
    function inicializa()
    {
        SvgInliner();
        //CarregaClinicas();
    }
    function CarregaClinicas() 
    {
        console.log("envio");
        //var codigo = "<?php echo htmlspecialchars($_SESSION['codigo']); ?>";

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("clinicas").innerHTML = this.responseText;
            }
        };
        
      

        xmlhttp.open("GET", "<?php $_SERVER['DOCUMENT_ROOT']?>/ServerScripts/refactored/CarregaClinicasCadastramento.php?", true);
        xmlhttp.send();
    }
    function salvaBanco() 
    {
        var nome     = document.getElementById("nome").value;
        var cpf      = document.getElementById("cpf").value;
        var bday     = document.getElementById("bday").value;
        var CEP      = document.getElementById("CEP").value;
        var endereco = document.getElementById("endereco").value;
        var senha    = document.getElementById("senha").value;

        var email     = document.getElementById("email").value;
        var telefone1  = document.getElementById("telefone1").value;
        var telefone2 = document.getElementById("telefone2").value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "1")
                {
                    alert("Cadastrado com sucesso!");
                    window.location.replace("/Paginas/Login.php"); 
                }
            }
        };
        

        envio = "nome=" + nome + "&cpf=" + cpf + "&bday=" + bday + "&CEP=" + CEP
        + "&endereco=" + endereco + "&senha=" + senha + "&email=" + email + "&telefone1=" + telefone1
        + "&telefone2=" + telefone2 +"&crmv"+crmv;

        console.log(envio);

        xmlhttp.open("GET", "<?php $_SERVER['DOCUMENT_ROOT']?>/ServerScripts/refactored/salvaNovoMedico.php?" + envio, true);
        xmlhttp.send();
    }
</script>

</html>