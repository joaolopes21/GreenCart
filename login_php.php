<?php
include('connexion.php');
$email= $_POST['login'];
$senha=$_POST['senha'];

$sql= "Select email,pass from infos where email='$email' and pass='$senha'";
$result= $conn->query($sql);
$result_name="Select * from infos where email='$email' and pass='$senha'";
$name= $conn->query($result_name);
if($result->num_rows > 0){
$row= $name->fetch_assoc();
session_start();
$array_info = array(
    "id" => $row['id'],
    "first_name" => $row['first_name'],
    "last_name" => $row['last_name'],
    "email" => $row['email'], 
    "phone" => $row['phone'],
    "pass" => $row['pass'],
    "genero" => $row['genero']

    
); # essa array no momento do login vai ser definida numa variavel de SESSION assim podemos resgatar todos as informacoes a relacao dessa pessoa
$_SESSION['name']=$row['first_name'];
$_SESSION['lastname']=$row['last_name'];
$_SESSION['infos_pessoa'] = $array_info;

header('Location: index.php');}
else{
    session_start();
    $_SESSION['message']=True;
    header('Location: Login_test.php');
}
    ?>


