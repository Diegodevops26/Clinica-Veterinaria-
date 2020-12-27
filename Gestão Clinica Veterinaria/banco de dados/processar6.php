<?php

include_once("conexao.php")

$nomeProprietario = $_POST['nomePropretario'];
$nomeAnimal = $_POST['nomeAnimal'];
$cpf = $_POST['cpf'];
$dataNascimento= $_POST['dataNascimento'];
$endereço = $_POST['endereço'];
$email = $POST["email"];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$genero=$_POST['genero'];
$cep=$_POST['cep'];
$definaAsenha=$_POST['definaAsenha'];



$consulta ="INSERT INTO paciente (id, nomeProprietario,nomeAnimal,cpf,dataNascimento,endereço,email,telefone1,telefone2,genero,cep,definaAsenha ) VALUES (NULL ,$nomeProprietario,$nomeAnimal,$cpf,$dataNascimento,$endereço,$email,$telefone1,$telefone2,$genero,$cep,$definaAsenha);";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>