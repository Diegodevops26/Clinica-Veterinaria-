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
$relatorio = $_POST['realatorio'];
$observação = $_POST['observação'];


$consulta ="INSERT INTO paciente (id, nomeProprietario,nomeAnimal,cpf,dataNascimento,endereço,email,telefone1,telefone2,relatorio,observação ) VALUES (NULL ,$nomeProprietario,$nomeAnimal,$cpf,$dataNascimento,$endereço,$email,$telefone1,$telefone2,$relatorio,$observação );";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>