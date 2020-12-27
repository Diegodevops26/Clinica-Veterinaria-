<?php

include_once("conexao.php")
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$dataNascimento=$_POST['dataNascimento'];
$endereço=$_POST['endereço'];
$email=$_POST['email'];
$telefone=$_POST['telefone1'];

$consulta ="INSERT INTO medico (id,nome,cpf,dataNascimento,endereço,email,telefone ) VALUES (NULL ,$nome,$cpf,$dataNascimento,$endereço,$email,$telefone);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>