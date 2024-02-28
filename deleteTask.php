<?php 

include "./includes/config.php";

$id = $_GET['id'];

$sql = "DELETE FROM task WHERE task.id = $id";

if(mysqli_query($conn, $sql)){
    echo "Successfully deleted an item";
}

header("Location: index.php");

?>