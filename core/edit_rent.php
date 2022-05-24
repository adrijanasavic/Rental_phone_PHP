<?php
require "./core/init.php";

$rents = $Rents->getAll();

require "./views/edit_rent.view.php";
?>