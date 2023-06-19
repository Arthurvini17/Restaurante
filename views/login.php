<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Document</title>
</head>

<body>
    <section id="formulario">
        <div class="logo">
            <img src="../public/imagens/logotipo-da-pizzaria.png">
        </div>
        <div class="pai">
            <form action="../controllers/logar.php" method="post">
                <input type="email" placeholder="Insira Seu Email" name="email">
                <input type="password" placeholder="Insira Sua Senha" name="senha">
                <input type="submit" value="Logar">

            </form>

        </div>
    </section>
</body>

</html>