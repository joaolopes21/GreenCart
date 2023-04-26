<?php
include('connexion.php');
session_start();
if(isset($_SESSION['removed'])){
    ?>
    <script>
        alert('Account  has been  deleted successfully.');
    </script>
<?php
    unset($_SESSION['removed']);
}
elseif (isset($_SESSION['not_removed'])){
    ?>
    <script>
        alert('Account not found try again.')
    </script>


<?php
    unset($_SESSION['not_removed']);
}
if(isset($_SESSION['phone'])){
    ?>
    <script>
        alert('Phone number updated successfully')
    </script>

    <?php
    unset($_SESSION['phone']);
}

elseif(isset($_SESSION['firstnameupd'])){
    ?>
    <script>
        alert('First name updated successfully')
    </script>

    <?php
    unset($_SESSION['firstnameupd']);
}
elseif(isset($_SESSION['lastnameupd'])){

    ?>
    <script>
        alert('Last name updated successfully')
    </script>

    <?php
    unset($_SESSION['lastnameupd']);
}
elseif(isset($_SESSION['fail_upd'])){
    ?>
    <script>
    alert('Update failed , try again.');
    </script>
    <?php
    unset($_SESSION['fail_upd']);
}

$sql="Select id,first_name,last_name,email,phone,pass,genero from infos";
$result= $conn->query($sql);

?>


<html lang="en">
<head>
    <title >Table</title>
    <style >
        .content-table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 2em;
            min-width: 400px;

        }

        .content-table thead tr{
            text-align: left;
            background-color: #00ff88;
            color: white;
            font-weight: bold;
        }

        .content-table th,

        .content-table td{
            padding:20px 30px;
        }

        .content-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(even){
           background-color: #f3f3f3;

        }
        .ok{
            font-size: 2em; 
            border-radius:6px; 
            color:white;
            font-family:Arial;
            cursor: pointer;
            background-color:#00ff88 ;
            border: none;
        }

        #field option{
            font-size: 20px;

        }
        
    </style>
</head>
<body style="display:flex;align-items:center;justify-content: center;flex-direction: column;font-family: Arial;">
<h1 style="font-size: 3em;">Accounts</h1>
<table class="content-table">



<thead>
    <tr>
        <th>
            Id
        </th>
        <th>
            firstname
        </th>
        <th>
            lastname
        </th>
        <th>
            email
        </th>
        <th>
            phone
        </th>
        <th>
            password
        </th>
        <th>
            genero
        </th>


    </tr>
</thead>
    <?php
    if ($result->num_rows >0){
        while ($row= $result->fetch_assoc()){


            ?>
            <tr>
                <td>
                    <?php echo $row['id'];?>
                </td>
                <td>
                    <?php echo $row['first_name'];?>
                </td>
                <td>
                    <?php echo $row['last_name'];?>
                </td>
                <td>
                    <?php echo $row['email'];?>
                </td>
                <td>
                    <?php echo $row['phone'];?>
                </td>
                <td>
                    <?php echo $row['pass'];?>
                </td>
                <td>
                    <?php echo $row['genero'];?>
                </td>
            </tr>

    <?php
    }}
    

    ?>

</table>
<script>
        function notnull(){
            let id= document.getElementById('id_remove');
            if (id.value=='' || isNaN(id.value)){
                alert('Please put a valid number in the id section.')
                id.focus();
                id.value='';
                return false;

            }
            return true;

        }

        function notnull1(){
            let id= document.getElementById('id_update');
            if (id.value=='' || isNaN(id.value)){
                alert('Please put a valid number in the id column.')
                id.focus();
                id.value='';
                return false;

            }
            return true;

        }
        function notnull2(){
            let id= document.getElementById('new_vlw');
            if (id.value==''){
                alert('Please put a valid new value.')
                id.focus();
                return false;

            }
            return true;

        }
    </script>

<div>
<div style="display: flex; justify-content:center;">
    <form action="Delete.php" method="post" onsubmit="return   (notnull()  && confirm('Are you sure you want to remove?'));" >
<input type="text" name="id_remove" placeholder="Id you want to remove." id="id_remove" style="font-size: 1.8em;">
<input type="submit" value="Remove" class="ok" >

    </div>

<div style="display: flex;margin-top:10px;">
    </form>

    <form action="Update.php" method="post" onsubmit="return notnull1() && notnull2() && confirm('Are you sure you want to update this field?');">
    <label for="field" >Choose field:</label>
    <select id="field" style="width: 100px;height:50px;" name="field">
        <option value="phone">phone</option>
        <option value="firstname">firstname</option>
        <option value="lastname">lastname</option>
    </select>
    <label style="font-size: 20px;">Id:</label>
    <input type="text" name="id_update" id="id_update" style="font-size:20px;width:100px;height:50px;">
    <label style="font-size: 20px;">New value:</label>
    <input type='text' name="new_value" id="new_vlw" style="font-size:20px;width:250px;height:50px;">
    <input type="submit" value="Update" class="ok">

</form>
</div>

   

</div>


<button type="button" style="font-size: 2em;" onclick="window.location.href='Login_test.php';">
    Return to Login

</button>
</body>
</html>
