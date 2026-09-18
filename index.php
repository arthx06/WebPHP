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
            <label>Nome: <input type="text" name="nome" id="nome"></label>
            <label>Email: <input type="email" name="email" id="email"></label>
            <label>Telefone: <input type="tel" name="telefone" id="telefone"></label>
            <button type="submit">Cadastrar</button>
        </form>
          <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              $nome = $_POST['nome'];
              $email = $_POST['email'];
              $telefone = $_POST['telefone'];

              $databaseUrl = getenv("DATABASE_URL");

              $conexao = pg_connect($databaseUrl);


              pg_query_params(
                $conexao,
                "INSERT INTO usuario(nome, email, telefone) VALUES ($1, $2, $3)",
                array($nome, $email, $telefone)
                
              );


              echo "Cadastro REALIZADO!";


            }

          ?>
      </div>
  </div>
  


   <footer>
    <p>© 2026 Arthur Aguiar- Todos os direitos reservados</p>
  </footer>





</body>
</html>
