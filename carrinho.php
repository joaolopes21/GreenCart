<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['lastname'])){
    $_SESSION['firstname']=$_SESSION['name'];
    $_SESSION['lastname1']=$_SESSION['lastname'];
    }
    
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
            <link rel="stylesheet" href="css/carrinho.css">

        </head>
        <body>
        <!-- header section starts  -->

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>

                <a href="index.html" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" style="width:300px;"></img>
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
                    <a href="carrinho.html" class="fas fa-shopping-cart"></a>
                    <a href="User.php" class="fas fa-user"></a>
                </div>

            </header>

            <section>

                <pre>



                    <!-- criar espaco-->
    
    
    
                </pre>
            </section>
            
            <div class="cart_container">
                <h1 class="heading"> Meu <span>carrinho</span></h1>

            
                <h2 class="mid"> Seu carrinho está <span>vazio</span>.</h2>
                <img class="cart_icon" src="images/sad_cart.png">

                <h2 class="cart_buy_find"> Adicione produtos <span class="link_prod"><a href="produtos.php">aqui.</a></span></h2>
            </div>

            <section class="footer">

                <div class="box-container">

                    <div class="box">
                        <h3>Links rápidos</h3>
                        <a href="index.php">Home</a>
                        <a href="index.php">Sobre</a>
                        <a href="produtos.php">Produtos</a>
                        <a href="avaliacoes.php">Avaliações</a>
                        <a href="index.php">Contato</a>
                    </div>

                    <div class="box">
                        <h3>Links extras</h3>
                        <a href="#">Minha conta</a>
                        <a href="#">Meu pedido</a>
                        <a href="#">Favoritos</a>
                    </div>

                    <div class="box">
                        <h3>Locais</h3>
                        <a href="#">Paraná</a>
                        <a href="#">Santa Catarina</a>
                        <a href="#">Mato Grosso do Sul</a>
                    </div>

                    <div class="box">
                        <h3>Informações para contato</h3>
                        <a href="#">+55 (41) 99830-3237</a>
                        <a href="#">contato@GreenCart.com</a>
                        <a href="#">Curitiba > Paraná > Brasil - 37847654</a>
                    </div>

                </div>

            </section>
        </body>
    </html>