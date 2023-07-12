<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM pokemon WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Editar pokemones</title>
        
    </head>
    <body>
        <div class="pokemon-form">
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="NombreDePokemon" value="<?= $row['name']?>">
                <input type="text" name="tipo" placeholder="TipoDePokemon" value="<?= $row['tipo']?>">
               

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
