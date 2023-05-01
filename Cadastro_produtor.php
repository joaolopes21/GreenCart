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
        <form action="Insert_info_produtor.php" method="post" onsubmit="return validate();">
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
                    <label for="nome_empresa">Nome Empresa</label>
                    <input id="nome_empresa" type="text" name="nome_empresa" placeholder="Digite o nome da empresa" required>
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
                    <label for="CNPJ">CNPJ</label>
                    <input id="CNPJ" type="CNPJ" name="cnpj" placeholder="00.000.000/0000-00" required>
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

            
            <div class="continue-button">
                <input type="submit" value="Continuar">
            </div>
        </form>
    </div>
</div>
<script>
    function isEmail(text) {
        const regex =/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/;
        if(regex.test(text)){
            return true;
        }
        return false;
    }


    function allLetter(inputtxt)
    {
        var letters = /^[A-Za-z,\s,\.,\-]+$/;
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
    function validarCNPJ(cnpj) {
 
 cnpj = cnpj.replace(/[^\d]+/g,'');

 if(cnpj == '') return false;
  
 if (cnpj.length != 14)
     return false;

 
 if (cnpj == "00000000000000" || 
     cnpj == "11111111111111" || 
     cnpj == "22222222222222" || 
     cnpj == "33333333333333" || 
     cnpj == "44444444444444" || 
     cnpj == "55555555555555" || 
     cnpj == "66666666666666" || 
     cnpj == "77777777777777" || 
     cnpj == "88888888888888" || 
     cnpj == "99999999999999")
     return false;
      
 // Valida DVs
 tamanho = cnpj.length - 2
 numeros = cnpj.substring(0,tamanho);
 digitos = cnpj.substring(tamanho);
 soma = 0;
 pos = tamanho - 7;
 for (i = tamanho; i >= 1; i--) {
   soma += numeros.charAt(tamanho - i) * pos--;
   if (pos < 2)
         pos = 9;
 }
 resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
 if (resultado != digitos.charAt(0))
     return false;
      
 tamanho = tamanho + 1;
 numeros = cnpj.substring(0,tamanho);
 soma = 0;
 pos = tamanho - 7;
 for (i = tamanho; i >= 1; i--) {
   soma += numeros.charAt(tamanho - i) * pos--;
   if (pos < 2)
         pos = 9;
 }
 resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
 if (resultado != digitos.charAt(1))
       return false;
        
 return true;
 
}

    function validate(){

        let first=document.getElementById('nome_empresa');
        let email=document.getElementById('email');
        let phone=document.getElementById('number');
        let password=document.getElementById('password');
        let cnpj = document.getElementById('CNPJ');
       let confirm_pass = document.getElementById('confirmPassword');
      

        if (first.value.length<3 || !allLetter(first)){
            alert('First name is incorrect.');
            first.focus();
            return false;
        }
        if (!validarCNPJ(cnpj.value)){
            alert('CNPJ is wrong.')
            CNPJ.focus();
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
        
        if(password.value != confirm_pass.value){
            alert('Passwords don\'t match');
            return false
        }

        return true;

    }


</script>

</body>

</html>