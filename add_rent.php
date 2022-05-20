<?php
require "./core/function.php";

$phones = selectAll("phones");
$providers = selectAll("providers");

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $user=$_POST["user"];
    $phone=$_POST["phone"];
    $provider=$_POST["provider"];
    $start_date=$_POST["start_date"];
    $end_date=$_POST["end_date"];

    $sql = "INSERT INTO rents (user, phone, provider, start_date, end_date) VALUES ('$user', '$phone', '$provider', '$start_date', '$end_date')";
    $query = mysqli_query($db, $sql);
    redirect("index.php");
}

//dd($_POST);
//dd($_POST["user"]);

require "./views/add_rent.view.php";
?>