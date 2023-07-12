<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre_pokemon = $_POST['name'];
$tipo = $_POST['tipo'];


$sql="UPDATE pokemon SET name='$nombre_pokemon', tipo='$tipo', WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
