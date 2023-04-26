<?php
include('connexion.php');
$id= $_POST['id_remove'];

$sql="Delete from infos WHERE id=$id";
$sql1="Select * from infos where id=$id";
$result=$conn->query($sql1);

if( ($conn->query($sql) === TRUE) && ($result->num_rows>0)){
    session_start();
    $_SESSION['removed']=$id;
    header('Location: table.php');
}

elseif($result->num_rows==0){
    session_start();
    $_SESSION['not_removed']=$id;
    header('Location:table.php');
}

?>