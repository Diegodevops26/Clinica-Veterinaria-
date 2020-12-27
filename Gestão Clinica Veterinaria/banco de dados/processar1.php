<?php

include_once("conexao.php")

$email=$_POST['email'];
$passaword=$_POST['passaword'];


$consulta ="INSERT INTO menu (id,email,passaword  ) VALUES (NULL ,$email,$passaword );";
$resultado =  mysqli_query($conn, $consulta);


if(mysqli_insert_id($conn)){

    echo "Bem-Vindo"

}else{
    echo="Login ou senha incorretos!"
}

?>