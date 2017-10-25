<?php
session_start();
// router
var_dump($_GET);
if (!empty($_GET['page']) && is_file('controler_'.$_GET['page'].'.php')) 
{
include 'controler_'.$_GET['page'].'.php'; 
}
else
{
include 'controler_accueil.php'; 
}