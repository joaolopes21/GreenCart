
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Formulário</title>
</head>
<?php
session_start();
if(isset($_SESSION['duplicate'])){
?>
<script>
    alert('Email already registered.')

</script>
 <?php
    unset($_SESSION['duplicate']);    }

        ?>

<body>
<div class="container">
    <div class="form-image">
        <img src="images\greencart_carrinho-removebg-preview.png" alt="GreenCart">
    </div>
    <div class="form">
        <form action="Insert_info.php" method="post" onsubmit="return validate();">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="login-button">
                    <button><a href="Login_test.php">Voltar pra Login</a></button>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Primeiro Nome</label>
                    <input id="firstname" type="text" name="first_name" placeholder="Digite seu primeiro nome" required>
                </div>

                <div class="input-box">
                    <label for="lastname">Sobrenome</label>
                    <input id="lastname" type="text" name="last_name" placeholder="Digite seu sobrenome" required>
                </div>
                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="input-box">
                    <label for="number">Celular</label>
                    <input id="number" type="tel" name="phone" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="input-box">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="pass" placeholder="Digite sua senha" required>
                </div>


                <div class="input-box">
                    <label for="confirmPassword">Confirme sua Senha</label>
                    <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                </div>

            </div>

            <div class="gender-inputs">
                <div class="gender-title">
                    <h6>Gênero</h6>
                </div>

                <div class="gender-group">
                    <div class="gender-input">
                        <input id="female" type="radio" name="gender" value="Feminino">
                        <label for="female">Feminino</label>
                    </div>

                    <div class="gender-input">
                        <input id="male" type="radio" name="gender" value="Masculino">
                        <label for="male">Masculino</label>
                    </div>

                    <div class="gender-input">
                        <input id="others" type="radio" name="gender" value="Outros">
                        <label for="others">Outros</label>
                    </div>


                </div>
            </div>

            <div class="continue-button">
                <input type="submit" value="Continuar">
            </div>
        </form>
    </div>
</div>
<script>
    // jimmy butler bt
    function isEmail(text) {
        const regex =/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/;
        if(regex.test(text)){
            return true;
        }
        return false;
    }


    function allLetter(inputtxt)
    {
        var letters = /^[A-Za-z,\s]+$/;
        if(inputtxt.value.match(letters))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function isPhone(inputtext){
        const ph=/^\+?[1-9][0-9]{7,14}$/;
        return ph.test(inputtext);
    }

    function isPassword(text){
        const  passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/; // no minimo um numero um maiusculo e um minusculo
        if(passw.test(text)){
            return true;
        }
        return false;
    }

    function validate(){

        let first=document.getElementById('firstname');
        let last=document.getElementById('lastname');
        let email=document.getElementById('email');
        let phone=document.getElementById('number');
        let password=document.getElementById('password');
        let masculino = document.getElementById('male');
        let feminino = document.getElementById('female');
        let outros = document.getElementById('others');
        let confirm_pass = document.getElementById('confirmPassword');

        if (first.value.length<3 || !allLetter(first)){
            alert('First name is incorrect.');
            first.focus();
            return false;
        }
        if (last.value.length<3 || !allLetter(first)){
            alert('Last name is incorrect.')
            last.focus();
            return false;
        }
        if(!isEmail(email.value)){
            alert('Please input a valid email.');
            email.focus();
            return false;
        }
        if(!isPhone(phone.value)){
            alert('Phone number invalid');
            phone.focus();
            return false;
        }
        if(!isPassword(password.value)){
            alert('Invalid Password. Must have between 6-20 characters and at least one capital , one lowercase and a number.');
            password.focus();
            password.value='';
            password.style.backgroundColor='red';
            return false;
        }
        if(!(masculino.checked || feminino.checked || outros.checked)){
            alert('Por favor , informar genero.');
            return false;
        }
        if(password.value != confirm_pass.value){
            alert('Passwords don\'t match');
            return false
        }

        return true;

    }


</script>

</body>

</html>
