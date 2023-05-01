<?php
include('connexion.php');

$nome_empresa=$_POST['nome_empresa'];
$cnpj= $_POST['cnpj'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];



$sql1= "Select email from infos where email='$email'";
$result= $conn->query($sql1);
if($result->num_rows >0){
        session_start();
        $_SESSION['duplicate']=True;
        header('Location: Cadastro_produtor.php');
}

else{




$sql = "INSERT INTO infos_prod(nome_empresa,cnpj,email_prod,fone_prod,pass_prod) values ('$nome_empresa','$cnpj','$email','$phone','$password')";
 if ($conn->query($sql) === TRUE) {
     session_start();
     $_SESSION['created']=True;
     header('Location: Login_test.php');


     }
 }
 $conn->close();

?>
