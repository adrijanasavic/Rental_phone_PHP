<?php
require "./core/function.php";

$rents = selectAll("rents");
// dd($rents);

require "./views/index.view.php";
?>