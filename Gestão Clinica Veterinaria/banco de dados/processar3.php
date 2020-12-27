<?php

include_once("conexao.php")

$nomeProprietario = $_POST['nomePropretario'];
$nomeAnimal = $_POST['nomeAnimal'];
$endereço = $_POST['endereço'];
$email = $POST["email"];
$medico=$POST['medico'];
$especialidade =$_POST['especialidade'];
$diaEhora=$POST['diaEhora'];


$consulta ="INSERT INTO paciente (id, nomeProprietario,nomeAnimal,endereço,email,medico,especialidade,diaEhora ) VALUES (NULL ,$nomeProprietario,$nomeAnimal,$endereço,$email,$medico,$especialidade,$diaEhora );";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>