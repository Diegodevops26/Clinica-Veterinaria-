<?php

include_once("conexao.php")
$relatorioMedico=$_POST['relatorio'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$paciente=$_POST['paciente'];

$consulta ="INSERT INTO medico (id, relatorioMedico,dia,hora,paciente) VALUES (NULL ,$relatorioMedico,$dia,$hora,$paciente);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>