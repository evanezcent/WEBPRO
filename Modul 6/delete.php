<?php
// include database connection file
include_once("config.php");

// Get id dari URL untuk delete dari user
if (!isset($_GET["id"])){
    echo "NO DATA IS SET !";
}
else{
    $id = $_GET["id"];
    $sql = mysqli_query($conn,"DELETE FROM `postingan` WHERE id_posting = '$id'"); //DELETE
    header('Location: timeline.php');
}

?>