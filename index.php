<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <header>
    <h1>Arthur Aguiar</h1>
        <nav>
        <a href="https://arthx06.github.io/">Voltar ao Portfólio</a>
    </nav>
  </header>
  <div class="container">
      <div class="card">
       
        <form method="POST">
            <h1>Cadastro de Clientes</h1>
            <label>Nome: <input type="text" name="nome"></label>
            <label>Email: <input type="email" name="email"></label>
            <label>Telefone: <input type="tel" name="telefone" id=""></label>
            <button type="submit">Cadastrar</button>
        </form>
      </div>
  </div>
  


   <footer>
    <p>© 2026 Arthur Aguiar- Todos os direitos reservados</p>
  </footer>

  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = $_POST['email'];

      echo "E-mail recebido: " .$email;
    }

  ?>



</body>
</html>