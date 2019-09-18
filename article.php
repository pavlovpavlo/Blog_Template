<?php 

	require_once("database.php");
    require_once("models/articles.php");

    $db = getInstance();
    $article = articleGet($_GET['id'], $db);

    include("views/article.php");

?>