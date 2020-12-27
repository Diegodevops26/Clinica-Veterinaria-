<?php

include_once("conexao.php")
$nomeMedico=$_POST['nomeMedico'];
$cpf=$_POST['cpf'];
$dataNascimento=$_POST['dataNascimento'];
$endereço=$_POST['endereço'];
$email=$_POST['email'];
$telefone1=$_POST['telefone1'];
$telefone2=$_POST['telefone2'];
$crmv=$_POST['crmv'];


$consulta ="INSERT INTO medico (id, nomeMedico,cpf,dataNascimento,endereço,email,telefone1,telefone2,crmv) VALUES (NULL ,$nomeMedico,$cpf,$dataNascimento,$endereço,$email,$telefone1,$telefone2,$crmv );";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>