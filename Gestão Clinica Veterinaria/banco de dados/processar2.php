<?php

include_once("conexao.php")

$medico= $_POST['medico'];
$dia= $_POST['dia'];
$horario=$_POST['horario'];




$consulta ="INSERT INTO paciente (id,dia,horario ) VALUES (NULL ,$dia,$horario );";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>