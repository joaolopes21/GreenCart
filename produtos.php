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
            <link rel="stylesheet" href="CSS/produtos.css">
        
        </head>
        <body>

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>
            
                <a href="index.php" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" style="width: 300px;;"></img>
                    </a>
            
                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="index.php">Sobre</a>
                    <a href="#products">Produtos</a>
                    <a href="avaliacoes.php">Avaliações</a>
                    <a href="index.php">Contato</a>
                </nav>
            
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="carrinho.php" class="fas fa-shopping-cart"></a>
                    <a href="User.php" class="fas fa-user"></a>
                </div>
            
            </header>
            
            <pre>



                <!-- criar espaco-->



            </pre>

            <section class="products" id="products">

                <h1 class="heading"> Produtos <span>disponíveis</span> </h1>

                <div class="box-container">

                    <div class="box">
                        <span class="discount">-20%</span>
                        <div class="image">
                            <img src="images/caixa morango.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>MORANGO CAIXA (4 BANDEJAS)</h3>
                            <div class="price"> R$14.99 <span>R$19.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-15%</span>
                        <div class="image">
                            <img src="images/AMEIXA.PNG" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>AMEIXA IMPORTADA (KG)</h3>
                            <div class="price"> R$12.99 <span>R$15.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-15%</span>
                        <div class="image">
                            <img src="images/uva.jpg" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>UVA THOMPSON SEM SEMENTE (BANDEJA)</h3>
                            <div class="price"> R$9.99 <span>R$14.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-50%</span>
                        <div class="image">
                            <img src="images/ALFACE.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>ALFACE AMERICANA (UNIDADE)</h3>
                            <div class="price"> R$1.99 <span>R$2.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-17%</span>
                        <div class="image">
                            <img src="images/repolho.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>REPOLHO BRANCO</h3>
                            <div class="price"> R$4.99 <span>R$5.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="image">
                            <img src="images/repolho roxo.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>REPOLHO ROXO</h3>
                            <div class="price"> R$7.99</div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-18%</span>
                        <div class="image">
                            <img src="images/CENOURA.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>CENOURA (Kg)</h3>
                            <div class="price"> R$4.99 <span>R$6.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-10%</span>
                        <div class="image">
                            <img src="images/BATATA.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>BATATA (Kg)</h3>
                            <div class="price"> R$3.99 <span>R$5.99</span> </div>
                        </div>
                    </div>

                    <div class="box">
                        <span class="discount">-5%</span>
                        <div class="image">
                            <img src="images/BATATA DOCE.png" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">+ Carrinho</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3>BATATA DOCE (Kg)</h3>
                            <div class="price"> R$5.99 <span>R$7.99</span> </div>
                        </div>
                    </div>

                </div>

            </section>

            <section class="footer">

                <div class="box-container">

                    <div class="box">
                        <h3>Links rápidos</h3>
                        <a href="index.php">Home</a>
                        <a href="index.php">Sobre</a>
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