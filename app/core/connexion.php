<?php
try
  {
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
  }
catch (Exception $e)
  {
        die('Erreur : ' . $e->getMessage());
  }
//PDO is a class (which is equivalent to an object in js)
//ceci nous permet d'accéder aux propriétés et aux méthodes de la class
