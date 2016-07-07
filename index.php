
<?php 
  include_once 'controles/validacoes.php';
 ?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
        <link rel="stylesheet" href="visual/css/normalize.css">

        <link rel="stylesheet" href="visual/css/style.css">
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastrar</a></li>
        <li class="tab"><a href="#login">Entrar</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup"> 

          <?php echo $msg; ?>
          
          <form action="?escolha=cadastro" method="post">

          <div class="field-wrap">
            <label>
              Nome<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="nome" />
          </div>
          
          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="senha" />
          </div>

          <button type="submit" class="button button-block"/>Cadastrar</button>
          <input type="hidden" name="acao" value="cadastro"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bem-Vindo!</h1>
          <?php echo $msg; ?>
          
          <form action="?escolha=cadastro" method="post">
          
            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off" name="email" />
            </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="senha" />
          </div>
          
          <p class="forgot"><a href="#">Esqueceu a senha ?</a></p>
          
          <button class="button button-block"/>Entrar</button>
          <input type="hidden" name="acao" value="acesso"/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="visual/js/index.js"></script>  
    
  </body>
</html>
