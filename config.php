<?php
/**
 * SimpleLibrary config
 * @var array
 */
$cfg = [
    // database credentials
    "dbHost" => "localhost",
    "dbUser" => "root",
    "dbPass" => "",
    "dbBase" => "simplelibrary"
];

isset($_GET['lang']) ? : $_GET['lang'] = "en" ; 
/*
$location = $_SERVER["HTTP_REFERER"];
$location.= (strpos($_SERVER["HTTP_REFERER"], "lang") === false) ? "?lang=en" : "";
header("Location: $location");
*/



