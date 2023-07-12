<?php 
include("connection.php");
$con = connection();

$sql = "SELECT * FROM pokemon";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pokemones</title>
</head>

<body>
    <div class="pokemon-form">
        <h1>ingrese pokemon</h1>
        <form action="insert.php" method="POST">
            <input type="text" name="name" placeholder="NombreDePokemon">
            <input type="text" name="tipo" placeholder="TipodDePokemon">
            

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="pokemon-table">
        <h2>pokemones registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>tipo</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id']?></th>
                        <th><?= $row['name']?></th>
                        <th><?= $row['tipo']?></th>
                        <th><a href="update.php?id=<? $row['id'] ?>" class="pokemon-table--edit">Editar</a></th>
                        <th><a href="delete.php?id=<?= $row['id'] ?>" class="pokemon-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>    
            </tbody>
        </table>
    </div>




    
</body>
</html>
