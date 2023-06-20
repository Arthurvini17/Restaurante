<?php
include('../controllers/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>Registros</title>
</head>

<body>

<section id="Formulario">
<a href="../views/index.php">Voltar</a>
<?php
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
         
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Endereço</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "nenhum resultado encontrado";
    }
    ?>

   
    </section>
  
</body>

</html>