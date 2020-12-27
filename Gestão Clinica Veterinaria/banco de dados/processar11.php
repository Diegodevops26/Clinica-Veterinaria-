<?php

include_once("conexao.php")
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$dataNascimento=$_POST['dataNascimento'];
$crmv=$_POST['crmv'];
$cep=$_POST['cep'];
$endereço=$_POST['endereço'];
$definaAsenha=$_POST['definaAsenha'];
$email=$_POST['email'];
$telefone1=$_POST['telefone1'];
$telefone2=$_POST['telefone2'];



$consulta ="INSERT INTO medico (id,nome,cpf,dataNascimento,crmv,cep,endereço,definaAsenha,email,telefone1,telefone2) VALUES (NULL ,$nome,$cpf,$dataNascimento,$crmv,$cep,$endereço,$definaAsenha,$email,$telefone1,$telefone2);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>