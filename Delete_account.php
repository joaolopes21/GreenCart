<?php
include('connexion.php');
session_start();
if($_SESSION['is_produtor']){
    $id=$_SESSION['infos_pessoa_prod']['id'];
    $sql="Delete from infos_prod WHERE id_prod=$id";
    $sql1="Select * from infos_prod where id_prod=$id";
    $result=$conn->query($sql1);
}
else{
$id=$_SESSION['infos_pessoa']['id'];
$sql="Delete from infos WHERE id=$id";
$sql1="Select * from infos where id=$id";
$result=$conn->query($sql1);}

if( ($conn->query($sql) === TRUE) && ($result->num_rows>0)){
    session_start();
    $_SESSION['removed']=$id;
    header('Location: login_test.php');
}

elseif($result->num_rows==0){
    session_start();
    $_SESSION['not_removed']=$id;
    header('Location: login_test.php');
}


?>