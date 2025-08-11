<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro Realizado</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background-image: url('foto1.jpg'); /* Substitua pela imagem desejada */
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .mensagem {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.7);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }

    .mensagem h1 {
      font-size: 48px;
      font-weight: bold;
      background: linear-gradient(90deg, #ff69b4, #ff1493, #db7093);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: brilho 2s infinite alternate;
    }

    @keyframes brilho {
      from {
        text-shadow: 0 0 10px #ff69b4;
      }
      to {
        text-shadow: 0 0 20px #ff1493;
      }
    }

    @media (max-width: 600px) {
      .mensagem h1 {
        font-size: 32px;
      }

      .mensagem {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="mensagem">
    <h1>Login feito com sucesso!</h1>
  </div>
</body>
</html>
