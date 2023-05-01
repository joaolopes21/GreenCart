<?php
include('connexion.php');
$email= $_POST['login'];
$senha=$_POST['senha'];

$sql= "Select email,pass from infos where email='$email' and pass='$senha'";
$sql_prod= "Select email_prod,pass_prod from infos_prod where email_prod='$email' and pass_prod='$senha'";
$result= $conn->query($sql);
$result_prod= $conn->query($sql_prod);
$result_name="Select * from infos where email='$email' and pass='$senha'";
$result_name_prod="Select * from infos_prod where email_prod='$email' and pass_prod='$senha'";
$name= $conn->query($result_name);
$name_prod= $conn->query($result_name_prod);
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

    
); 
# essa array no momento do login vai ser definida numa variavel de SESSION assim podemos resgatar todos as informacoes a relacao dessa pessoa
$_SESSION['infos_pessoa'] = $array_info;
$_SESSION['is_produtor']=false;
header('Location: index.php');}
elseif($result_prod->num_rows > 0){
$row = $name_prod ->fetch_assoc();
session_start();
$array_info_prod = array(
    "id" => $row['id_prod'],
    "nome_empresa" => $row['nome_empresa'],
    "cnpj" => $row['cnpj'],
    "email_prod" => $row['email_prod'],
    "fone_prod" => $row['fone_prod'],
    "pass_prod" => $row['pass_prod']


);
$_SESSION['infos_pessoa_prod']= $array_info_prod;
$_SESSION['is_produtor']=true;
header('Location: index.php');
}
else{
    session_start();
    $_SESSION['message']=True;
    header('Location: Login_test.php');
}
    ?>


