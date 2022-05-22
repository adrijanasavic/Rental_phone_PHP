<?php
function dd($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
    die();
}

function vd($arg)
{
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";
}

$config = [
    "hostname" => "localhost:3307",
    "username" => "root",
    "password" => "root",
    "database" => "phone_rental"
];

// $config = [
//     "xampp" => [
//         "host" => "localhost",
//         "username" => "root",
//         "password" => "",
//         "db" => "rental",
//     ],
//     "mamp" => [
//         "host" => "localhost:3307",
//         "username" => "root",
//         "password" => "root",
//         "db" => "rental",
//     ],
// ];

$db = mysqli_connect($config["hostname"], $config["username"], $config["password"], $config["database"]) or die("Error connections!");

function redirect($page){
    header("Location: $page");
}

function displayDate($date){
    return date("d.m.Y", strtotime($date));
}