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

$db = mysqli_connect($config["hostname"], $config["username"], $config["password"], $config["database"]) or die("Error connections!");

function selectAll($table)
{
    global $db;
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($db, $sql);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function redirect($page){
    header("Location: $page");
}

function displayDate($date){
    return date("d.m.Y", strtotime($date));
}