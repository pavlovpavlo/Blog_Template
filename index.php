<?php 
    require_once("database.php");
    require_once("models/articles.php");

    $db = getInstance();
    $articles = articlesAll($db);
    include("views/articles.php");
 ?>