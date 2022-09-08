<?php

//Recieving all data
$id = $_GET['id'];

//creatinng connection
$conn = mysqli_connect("localhost", "id19539401_root", "F(jZ7z@IUzf{ci-N", "id19539401_crud");
$sql = "DELETE FROM `product` WHERE id = $id";


if(mysqli_query($conn, $sql)){
  header("Location: http://localhost/samssir/index.php");
}




