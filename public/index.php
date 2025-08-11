<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bem-vindo ao Sistema</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url('foto2.jpg'); /* imagem de fundo */
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }

    h1 {
      font-size: 40px;
      color: #cc9aa2;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .btn {
      display: inline-block;
      background-color: #ffc0cb;
      color: white;
      padding: 15px 30px;
      margin: 10px;
      border: none;
      border-radius: 30px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #8f5863;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 28px;
      }

      .btn {
        font-size: 16px;
        padding: 12px 25px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Bem-vindo ao Sistema</h1>
    <a href="cad.php" class="btn">Cadastrar Livro</a>
    <a href="login.php" class="btn">Login</a>
  </div>
</body>
</html>
