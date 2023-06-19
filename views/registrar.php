<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/registrar.css">
    <title>Registro</title>
</head>

<body>

    <form action="../controllers/registro.php" method="POST">

        <section id="formulario">

        <div class="logo">
            <img src="../public/imagens/logotipo-da-pizzaria.png">
        </div>
        <div class="pai">
            <h1>Cadastre-se no nosso restaurante</h1>


            <label>Seu nome</label> <input type="text" name="nome">


            <label>Seu email</label> <input type="email" name="email">


            <label>Sua senha</label> <input type="password" name="senha">



            <label>Seu endereço</label> <input type="text" name="endereco">

            <input type="submit">
            <a href="login.php">Ja tem uma conta?</a>
        </div>
    </form>
    </section>
</body>

</html>