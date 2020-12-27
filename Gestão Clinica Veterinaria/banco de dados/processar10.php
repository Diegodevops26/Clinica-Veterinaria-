<?php

include_once("conexao.php")
$observaçao=$_POST['relatorio'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$paciente=$_POST['paciente'];
$vacinaçao=$_POST['vacinaçao'];

$consulta ="INSERT INTO medico (id, observaçao,dia,hora,paciente,vacinaçao) VALUES (NULL ,$observaçao,$dia,$hora,$paciente,$vacinaçao);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>