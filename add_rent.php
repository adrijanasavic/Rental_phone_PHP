<?php
require "./core/function.php";

//$sql ="SELECT * FROM phones";
//$query = mysqli_query($db,$sql);
//$phones = mysqli_fetch_all($query,MYSQLI_ASSOC);
$phones = selectAll("phones");

//$sql ="SELECT * FROM providers";
//$query = mysqli_query($db,$sql);
//$providers = mysqli_fetch_all($query,MYSQLI_ASSOC);
$providers = selectAll("providers");

//vd($phones);
//dd($providers);

require "./views/add_rent.view.php";
?>