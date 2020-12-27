<?php

include_once("conexao.php")
$nomeMedico=$_POST['nomeMedico'];
$cmrv=$_POST['cpf'];
$dataNascimento=$_POST['dataNascimento'];
$endereço=$_POST['endereço'];
$consulta=$_POST['consulta'];
$diaEhora=$_POST['diaEhora'];



$consulta ="INSERT INTO medico (id, nomeMedico,crmv,dataNascimento,endereço,consulta,diaEhora) VALUES (NULL ,$nomeMedico,$crmv,$dataNascimento,$endereço,$consulta,$diaEhora);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>