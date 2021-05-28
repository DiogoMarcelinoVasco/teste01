<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>NutriSist</title>
  <link rel="stylesheet" href="css/style.css">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style>
    body {
      background-color: lightblue;
    }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
       <a class="navbar-brand" href="base.php">NutriSist</a>
          <li class="nav-item">
            <a id="l" class="nav-link" href="Login.php">Login</a>
          </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
      <div class="col-6 offset-2">
          <h1>Seja Bem Vindo ao NutriSist</h1>
      </div>
  </div>
  <div class="row">
      <div class="col-6 offset-2">
          <h2>Site para nutrição</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-6 offset-2">
          <h3>👍( ͡❛ ͜ʖ ͡❛)👍</h3>
      </div>
  </div>
 
  <p  align="center">
  <div class="container">
    <a class="links" id="paracadastro"></a>

    <div class="content">  

      <div id="cadastro">
        <form method="post" action=""> 
          <h10>Cadastro</h10>  
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="fulano@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p>  
            Já tem conta?
            <a href="Login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div></p>
    
<div class="contente">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="base.php">Home</a></li>
                        <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Sobre nós</h5>
                    <ul>
                        <li><a href="base.php">Informações da Empresa</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="#">Telefones</a></li>
                        <li><a href="#">Chat</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Informações</h5>
                    <p>Somos o NutriSist e estamos aqui para ajudar em sua nutrição</p>
                </div>
            </div>
        </div>
        <div class="myFooter">
           <div class="container">
                <h2 class="logo"><a href="base.php"> NutriSist </a></h2>
                <div class="social-icons">
                  <a href="https://twitter.com/login?lang=pt" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://pt-br.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>