<?php
require "./core/init.php";

$phones = $Phone->getAll();
$providers = $Provider->getAll();

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $data=[
    "user"=>$_POST["user"],
    "phone"=>$_POST["phone"],
    "provider"=>$_POST["provider"],
    "start_date"=>$_POST["start_date"],
    "end_date"=>$_POST["end_date"],
    ];
    

    $Rents ->addNewRent($data);
     
    // $sql = "INSERT INTO rents (user, phone, provider, start_date, end_date) VALUES ('$user', '$phone', '$provider', '$start_date', '$end_date')";
    // $query = mysqli_query($db, $sql);
    redirect("index.php");
}

//dd($_POST);
//dd($_POST["user"]);

require "./views/add_rent.view.php";