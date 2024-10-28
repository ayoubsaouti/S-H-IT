<?php

$host='localhost';
$user='redacteur';
$pass='helb';
$db='helb';

// Définition des variables de connexion
$dsn = "mysql:host=$host;dbname=$db";

//**************************************
// connexion à mysql et à la db
//**************************************
try 
{
	$dbh = new PDO($dsn, $user, $pass); //db handle
	$dbh->exec('SET NAMES utf8');
} 
catch (PDOException $e) 
{
	die( "Erreur ! : " . $e->getMessage() );
}


?>