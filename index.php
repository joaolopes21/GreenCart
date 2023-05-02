<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['lastname'])){
$_SESSION['firstname']=$_SESSION['name'];
$_SESSION['lastname1']=$_SESSION['lastname'];
}

$_SESSION['infos']= $_SESSION['infos_pessoa']; 
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
            

            
       

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>

                <a href="index.php" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" style="width: 300px;"></img>
                    </a>

                <nav class="navbar">
                    <a href="#home">Home</a>
                    <a href="#about">Sobre</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="avaliacoes.php">Avaliações</a>
                    <a href="#contact">Contato</a>
                </nav>

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="carrinho.php" class="fas fa-shopping-cart" ></a>
                    <a href="User.php" data-modal-target="#modal" class="fas fa-user"></a>
                    
                </div>
               

  </div>
            </header>

            <!-- header section ends -->

            <!-- home section starts  -->

            <section class="home" id="home">

                <div class="content">
                    <h3>GreenCart</h3>
                    <span> Produtos orgânicos </span>
                    <p>Uma via rápida e acessível que conecta o cliente a produtos e produtores orgânicos. </p>
                    <a href="produtos.php" class="btn">Compre agora</a>
                </div>
                
            </section>

            <!-- home section ends -->

            <!-- about section starts  -->

            <section class="about" id="about">

                <h1 class="heading"> <span> Sobre </span> nós </h1>

                <div class="row">

                    <div class="video-container">
                        <img src="images/gifs-deagricultura-12.gif"></img>
                    </div>

                    <div class="content">
                        <h3>Quem somos?</h3>
                        <p>Atualmente o acesso a produtos orgânicos vem sendo cada vez mais dificultado e caro. Diante dessa situação, 
                            a equipe GreenCart teve a ideia de facilitar e tornar mais acessível o acesso a tais produtos, por meio 
                            de uma plataforma que conecta os clientes aos pequenos produtores.</p>
                    </div>

                </div>

            </section>

            <!-- about section ends -->

            <!-- icons section starts  -->

            <section class="icons-container">

                <div class="icons">
                    <img src="images/icon-1.png" alt="">
                    <div class="info">
                        <h3>Produtos a prontos para retirada</h3>
                    </div>
                </div>

                <div class="icons">
                    <img src="images/icon-2.png" alt="">
                    <div class="info">
                        <h3>Valores acessíveis</h3>
                    </div>
                </div>

                <div class="icons">
                    <img src="images/icon-3.png" alt="">
                    <div class="info">
                        <h3>Promoções todos os dias</h3>
                    </div>
                </div>

                <div class="icons">
                    <img src="images/icon-4.png" alt="">
                    <div class="info">
                        <h3>Diversas formas de pagamento</h3>
                        <span>Dinheiro, Cartão de débito/crédito e PIX</span>
                    </div>
                </div>
            
            </section>

            <!-- icons section ends -->

            <!-- contact section starts  -->

            <section class="contact" id="contact">

                <h1 class="heading"> <span> Fale </span> conosco </h1>

                <div class="row">

                    <form action="">
                        <input type="text" placeholder="Nome" class="box">
                        <input type="email" placeholder="Email" class="box">
                        <input type="text" placeholder="Número" class="box">
                        <textarea name="" class="box" placeholder="Digite aqui sua mensagem..." id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="Enviar" class="btn">
                    </form>

                    <div class="image">
                        <img src="images/fale conosco.png" alt="">
                    </div>

                </div>

            </section>

            <!-- contact section ends -->

            <div>
                <hr>
            </div>

            <!-- footer section starts  -->

            <section class="footer">

                <div class="box-container">

                    <div class="box">
                        <h3>Links rápidos</h3>
                        <a href="#home">Home</a>
                        <a href="#about">Sobre</a>
                        <a href="produtos.php">Produtos</a>
                        <a href="avaliacoes.php">Avaliações</a>
                        <a href="#contact">Contato</a>
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

        <!-- footer section ends --> 
        </body>
    </html>