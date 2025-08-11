<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: url('foto2.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .cadastro-container {
      background-color: rgba(255, 255, 255, 0.85);
      padding: 40px;
      border-radius: 20px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      text-align: center;
    }

    h1 {
      font-size: 32px;
      color: #cc9aa2;
      margin-bottom: 20px;
      font-weight: bold;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      text-align: left;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #ffc0cb;
      color: white;
      padding: 12px 20px;
      margin-top: 20px;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
    }

    button:hover {
      background-color: #8f5863;
    }

    @media (max-width: 600px) {
      .cadastro-container {
        padding: 20px;
      }

      h1 {
        font-size: 24px;
      }

      button {
        font-size: 14px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="cadastro-container">
    <h1>Login</h1>
    <form action="process_login.php" method="POST">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>

      <label for="senha">Senha:</label>
      <input type="password" name="senha" id="senha" required>

      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
