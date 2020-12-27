<?php

include_once("conexao.php")
$medico=$_POST['medico'];
$diaEhora=$_POST['diaEhora'];
$relatorio=$_POST['relatorio'];




$consulta ="INSERT INTO paciente (id, medico,diaEhora,relatorio) VALUES (NULL ,$medico,$diaEhora,$relatorio);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>