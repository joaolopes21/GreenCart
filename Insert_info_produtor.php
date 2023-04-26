<?php
include('connexion.php');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$genero=$_POST['gender'];


    $sql1= "Select email from infos where email='$email'";
    $result= $conn->query($sql1);
    if($result->num_rows >0){
        session_start();
        $_SESSION['duplicate']=True;
        header('Location: Cadastro_test.php');
    }

    else{




$sql = "INSERT INTO infos(first_name,last_name,email,phone,pass,genero) values ('$first_name','$last_name','$email','$phone','$password','$genero')";
 if ($conn->query($sql) === TRUE) {
     session_start();
     $_SESSION['created']=True;
     header('Location: Login_test.php');


     }
 }
 $conn->close();

?>
