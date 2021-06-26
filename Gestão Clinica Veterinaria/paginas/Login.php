<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="styles/login.css">
<title> Login </title> <!-- Titulo da pagina --> 
<meta charset = "UTF-8">
</head>
<body>

    <div class = "central">
        <div class = "Login">
            <h2>Login</h2>
            <form action ="processar1.php" method = "POST">
            <div class="imgcontainer">
                 <img src="./icon/logo.svg" alt="Avatar" class="avatar">  
                </div>
                <div class="container">
                    <label for="E-mail"><b></b></label>
                    <input type="text" placeholder="Insira o E-mail" name="email" required>

                    <label for="password"><b></b></label>
                    <input type="password" placeholder="Insira a Senha" name="password" required>
    
                    <button type="submit">Login</button> 
                 <a href="../paginas/cadastro/cadastroPaciente.php">Criar nova conta</a> 
                </div>            
        </div>
</form>
</body>
</html>
