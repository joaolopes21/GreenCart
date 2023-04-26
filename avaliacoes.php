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
            <link rel="stylesheet" href="css/avaliacoes.css">

        </head>
        <body>
        <!-- header section starts  -->

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>

                <a href="index.html" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" style="width: 300px;;"></img>
                    </a>

                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="index.php">Sobre</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="#review">Avaliações</a>
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

            <section class="review" id="review">

                <h1 class="heading"> Avaliações de <span>usuários</span> </h1>
    
                <div class="box-container">
    
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Depois que conheci a plataforma, 
                            passei a comprar minhas frutas orgânicas de 
                            uma maneira muito mais fácil!!!</p>
                        <div class="user">
                            <img src="images/customer1.png" alt="">
                            <div class="user-info">
                                <h3>Arlindo Wu Zen</h3>
                                <span>Usuário há mais de 3 anos</span>
                            </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
    
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Conheci a plataforma por meio de anúncios, e depois do primeiro mês de uso parei de ir
                            a mercados convencionais e comecei a comprar meus legumes apenas aqui. Recomendo muito!!!
                        </p>
                        <div class="user">
                            <img src="images/doutor fran.jpg" alt="">
                            <div class="user-info">
                                <h3>Doutor Fran</h3>
                                <span>Usuário frequente</span>
                            </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
    
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Tive muita facilidade na primeira compra, assim 
                            acabei me apaixonando pela plataforma e sua praticidade e 
                            simplicidade na hora de comprar produtos.</p>
                        <div class="user">
                            <img src="images/casimiro miguel.png" alt="">
                            <div class="user-info">
                                <h3>Casimiro</h3>
                                <span>Novo usuário</span>
                            </div>
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                    
                </section>

                <section class="review" id="review">
        
                    <div class="box-container">
        
                        <div class="box">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Depois que conheci a plataforma, 
                                passei a comprar minhas frutas orgânicas de 
                                uma maneira muito mais fácil!!!</p>
                            <div class="user">
                                <img src="images/paulomuzy.jpg" alt="">
                                <div class="user-info">
                                    <h3>Paulo Muzy</h3>
                                    <span>Usuário há mais de 5 anos</span>
                                </div>
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
        
                        <div class="box">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Conheci a plataforma por meio de anúncios, e depois do primeiro mês de uso parei de ir
                                a mercados convencionais e comecei a comprar meus legumes apenas aqui. Recomendo muito!!!
                            </p>
                            <div class="user">
                                <img src="images/hulk_brasileiro.png" alt="">
                                <div class="user-info">
                                    <h3>Hulk Brasileiro</h3>
                                    <span>Usuário há 1 ano</span>
                                </div>
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
        
                        <div class="box">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Plataforma muito boa, porém eu acho que deveriam
                                ter outros produtos a venda...</p>
                            <div class="user">
                                <img src="images/walter br.jpg" alt="">
                                <div class="user-info">
                                    <h3>Walter White</h3>
                                    <span>Novo usuário</span>
                                </div>
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                        
                    </section>

                    <section class="review" id="review">
        
                        <div class="box-container">
            
                            <div class="box">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Depois que conheci a plataforma, 
                                    passei a comprar minhas frutas orgânicas de 
                                    uma maneira muito mais fácil!!!</p>
                                <div class="user">
                                    <img src="images/vilani.jpg" alt="">
                                    <div class="user-info">
                                        <h3>Rafael Vilani Jr.</h3>
                                        <span>Usuário há 3 meses</span>
                                    </div>
                                </div>
                                <span class="fas fa-quote-right"></span>
                            </div>
            
                            <div class="box">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Conheci a plataforma por meio de anúncios, e depois do primeiro mês de uso parei de ir
                                    a mercados convencionais e comecei a comprar meus legumes apenas aqui. Recomendo muito!!!
                                </p>
                                <div class="user">
                                    <img src="images/Gaules_joia.png" alt="">
                                    <div class="user-info">
                                        <h3>Gaules</h3>
                                        <span>Novo usuário</span>
                                    </div>
                                </div>
                                <span class="fas fa-quote-right"></span>
                            </div>
            
                            <div class="box">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p>Tive muita facilidade na primeira compra, assim 
                                    acabei me apaixonando pela plataforma e sua praticidade e 
                                    simplicidade na hora de comprar produtos.</p>
                                <div class="user">
                                    <img src="images/mano do fortena.jpg" alt="">
                                    <div class="user-info">
                                        <h3>Jones</h3>
                                        <span>Usuário há 7 meses</span>
                                    </div>
                                </div>
                                <span class="fas fa-quote-right"></span>
                            </div>
                            
                        </section>

                        <section class="footer">

                            <div class="box-container">
            
                                <div class="box">
                                    <h3>Links rápidos</h3>
                                    <a href="index.php">Home</a>
                                    <a href="index.php">Sobre</a>
                                    <a href="produtos.php">Produtos</a>
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