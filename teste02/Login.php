<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login</title>
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
  </ul>
</nav>

<p align="center">
<div class="container" >
  <a class="links" id="paralogin"></a>
     
    <div class="content">      
      
      <div id="login">
        <form method="post" action=""> 
          <h10>Login</h10>  
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="fulano@gmail.com"/> 
          </p> 
  
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1234"/>
          </p>
  
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p>  
            <a href="Clientes.php"><button type="button" class="btn btn-primary btn-lg btn-block">Logar</button></a>
          </p>
           
          <p> Ainda não tem conta?
            <a href="base.php">Cadastre-se</a>
          </p>

        </form>
      </div>
    </div>
  </div></p>

  <button class="open-button" onclick="openForm()">Chat</button>

  <div class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <h1>Chat</h1>
  
      <label for="msg"><b>Message</b></label>
      <textarea placeholder="Digitar sua mensagem aqui" name="msg" required></textarea>
  
      <button type="submit" class="btn">Enviar</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Voltar</button>
    </form>
  </div>
  
  <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>
  
<div class="contente">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="base.php">Home</a></li>
                        <li><a href="Login.php">Login</a></li>
                    </ul>
                </div>
               <div class="col-sm-4 info">
                    <ul>
                        <h5>Contato</h5>
                        <p>nutrisist@gmail.com</p>
                        <p>(17) 3322-0800</p>
                      </ul>
                  </div>
                  <div class="col-sm-4 info">
                      <h5>Informações</h5>
                      <p>Estamos aqui para ajudar em seu trabalho</p>
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
