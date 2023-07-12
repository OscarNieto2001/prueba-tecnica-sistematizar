<?php
include("connection.php");
$con = connection();

$id = null;
$nombre_pokemon = $_POST['name'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO pokemon VALUES('$id','$nombre_pokemon','$tipo')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>
