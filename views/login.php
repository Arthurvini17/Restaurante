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
            <h1>Acesse sua conta</h1>
            <form action="../controllers/logar.php" method="post">
                 <label for="email">Insira seu email</label> <input type="email"  name="email" >
                <label> Insira sua senha</label><input type="password"  name="senha">
                <input type="submit" value="Logar">
                <a href="../views/registrar.php">Não tem uma conta? Crie uma aqui</a>

            </form>

        </div>
    </section>
</body>

</html>