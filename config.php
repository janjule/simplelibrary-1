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

//isset($_GET['lang']) ? : $_SERVER["HTTP_REFERER"]."?lang=en" ; 
//$_SERVER["HTTP_REFERER"] = $_SERVER["HTTP_REFERER"] . $_GET['lang'];}


