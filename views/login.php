<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
<<<<<<< HEAD
  
=======
    <link rel="stylesheet" href="estilo.css">

>>>>>>> 897228d5688bbb38bf7e08460142de0141c36b57
</head>
<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        main {
            width: 100%;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus, select:focus {
            border-color: #5cb85c;
            box-shadow: 0 0 5px rgba(92, 184, 92, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #4cae4c;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s, text-decoration 0.3s;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <main>
<<<<<<< HEAD
    <div class="container">

    <h2>Login</h2>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
       <a href="index.php?action=register">Cadastrar-se</a></button> 
       </div>
=======
        <div>
            <h2>Entrar</h2>
            <form method="post" action="index.php?action=login">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="senha" placeholder="Senha" required><br>
                <button type="submit">Login</button>
            </form>
            <!-- Define o destino do link e leva à opção de cadastro -->
            <!-- <button><a href="index.php?action=register">Cadastrar-se</a></button>  -->
            <a href="index.php?action=register">Cadastrar-se</a>

        </div>
>>>>>>> 897228d5688bbb38bf7e08460142de0141c36b57
    </main>
</body>

</html>
