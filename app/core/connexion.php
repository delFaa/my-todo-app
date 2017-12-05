<?php
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
  // lines of code to show errors: should be removed for users not to see them
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}
//PDO is a class (which is equivalent to an object in js)
//ceci nous permet d'accéder aux propriétés et aux méthodes de la classe
