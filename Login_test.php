<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>
<div class="main-login">
    <div class="left-login">
        
        <img src="images/greencart_carrinho-removebg-preview.png" alt="Econetworking" class="left_image">
    </div>
    <div class="right-login">
        <div class="card-login">
            <h1>LOGIN</h1>

            <form action="login_php.php" method="post" class="form_login">
                <div class="textfield">
                    <label for="usuario">Email</label>
                    <input type="text" name="login" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Password">


                </div>
                <input type="submit" class="btn-login" value="Login">
                <a href="Cadastro_test.php" class="criar_conta">Nao tem uma Conta e voce e um comprador?Criar conta.</a><br><br>
                <a href="Cadastro_produtor.php" class="criar_conta">Nao tem uma Conta e voce e um produtor?Criar conta.</a><br><br>
                <a href="Admin.php" class="criar_conta">Admin.</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if (isset($_SESSION['message'])){
    ?>
<script>
    alert('Account not found. Try again or create account.')
</script>
<?php
    unset($_SESSION['message']);
}
if(isset($_SESSION['created'])){
    ?>
<script >
    alert('Account created successfully. Log in please.')
</script>
<?php
    unset($_SESSION['created']);}
    ?>
