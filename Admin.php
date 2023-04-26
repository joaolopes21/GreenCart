<?php
/*
    testando se o commit esta funcionando */
?>
<html>
<head>

</head>
<body>
<form onsubmit="return verify() " action="table.php">
    <label>Password</label>
    <input type="password" id="pass_admin">
    <input type="submit">
</form>
<script>
    function verify(){
        let pass= document.getElementById('pass_admin');

        if(pass.value=='CZ1234'){
            return true;
        }
        alert('Wrong password');
          return  false;

    }

</script>
</body>
</html>
