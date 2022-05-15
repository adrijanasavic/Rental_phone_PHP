<?php
require "./core/function.php";

$sql = "SELECT * FROM users";
$query = mysqli_query($db,$sql);

$users = mysqli_fetch_all($query,MYSQLI_ASSOC);
//dd($users);

require "./views/index.view.php";
?>