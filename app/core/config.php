<?php
function debug($var){
  echo "<pre>";
  print_r($var);
  echo "<pre>";
}

function dd($var){
  debug($var);
  die();
}

$dbhost="localhost";
$dbname="todo_app";
$dbpass="root";
$dbuser="root";

define(SITE, $_SERVER["DOCUMENT_ROOT"].'/b_JS/my-todo-app/app/');

define(CONFIG, SITE.'config/');
define(CORE, SITE.'core/');
