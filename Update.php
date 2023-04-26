<?php

include('connexion.php');

$id=$_POST['id_update'];
$field=$_POST['field'];
$newval= $_POST['new_value'];
$sql1="Select * from infos where id=$id";
$result=$conn->query($sql1);


if($field=='phone'){
    $sql="Update infos set phone ='$newval' where id='$id'";
    if(($conn->query($sql) ===TRUE)&& ($result->num_rows>0)){
        session_start();
        $_SESSION['phone']=True;
        header('Location:table.php');

    }
    elseif($result->num_rows==0){
        session_start();
        $_SESSION['fail_upd']=True;
        header('Location:table.php');

    }
}
if($field =='firstname'){
    $sql="Update infos set first_name ='$newval' where id='$id'";
    if(($conn->query($sql) ===TRUE)&& ($result->num_rows>0)){
        session_start();
        $_SESSION['firstnameupd']=True;
        header('Location:table.php');

    }
    elseif($result->num_rows==0){
        session_start();
        $_SESSION['fail_upd']=True;
        header('Location:table.php');

    }

}
if($field == 'lastname'){
    $sql="Update infos set last_name ='$newval' where id='$id'";
    if(($conn->query($sql) ===TRUE)&& ($result->num_rows>0)){
        session_start();
        $_SESSION['lastnameupd']=True;
        header('Location:table.php');

    }
    elseif($result->num_rows==0){
        session_start();
        $_SESSION['fail_upd']=True;
        header('Location:table.php');

    }
}

?>