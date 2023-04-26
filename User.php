<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['lastname'])){
    $_SESSION['firstname']=$_SESSION['name'];
    $_SESSION['lastname1']=$_SESSION['lastname'];
    }
$first_name =  isset($_SESSION['infos_pessoa']['first_name']) ? $_SESSION['infos_pessoa']['first_name'] : "" ;
$last_name =  isset($_SESSION['infos_pessoa']['last_name']) ? $_SESSION['infos_pessoa']['last_name'] : "" ;

?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>GreenCart -  Produtos orgânicos aqui e agora!</title>

            <!-- font awesome cdn link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            <!-- custom css file link  -->
            <link rel="stylesheet" href="CSS/index.css">
            
           

        </head>
        <body>
            


            
        <!-- header section starts  -->

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>

                <a href="index.php" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" width="300px;"></img>
                    </a>

                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="index.php">Sobre</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="avaliacoes.php">Avaliações</a>
                    <a href="index.php">Contato</a>
                </nav>

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="carrinho.php" class="fas fa-shopping-cart"></a>
                    <a href="User.php" data-modal-target="#modal" class="fas fa-user"></a>
                    
                </div>
               

  </div>
  
            </header>
            <section class="home" id="home">


<div class="content">
<img src="img/images.jpg">
<h1 style="margin-top:20px;font-size:20px;"><?php echo 'Welcome '.$first_name.' '.$last_name ?></h1>
<button name="Edit Profile" style="width: 100px;height: 50px; border-radius: 20px;color: white;margin-top: 20px;background-color:green;cursor:pointer;" onclick="toInfo()">Edit Profile</button>
</div>


</section>
<script>
    function ret(){
        let c= confirm('Are you sure you want to log out ?');
        if(c){
            <?php unset($_SESSION['firstname']);
            unset($_SESSION['lastname1']);
            ?>
            window.location.href='Login_test.php';
        }
        
    }
    function toInfo(){
        window.location.href='Info_User.php';
    }
</script>
<div style="display: flex;justify-content:center;align-items:center;margin-top:20px;">
<button style="font-size:30px;background:green;border-radius:3px;color:aliceblue;cursor:pointer;" onclick="ret();" id='logout' >Logout</button>
</div>

        </body>
    </html>
            


