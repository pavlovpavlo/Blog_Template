<?php  
	require_once("../database.php");
    require_once("../models/articles.php");

    $db = getInstance();

    if(isset($_GET['action']))
    	$action = $_GET['action'];
    else
    	$action = "";

    if($action == "add"){
    	if(!empty($_POST)){
    		articlesNew($db, $_POST['title'], $_POST['date'], $_POST['content']);
    		header("Location: index.php");//Перенаправить
    	}
    	include("../views/article_admin.php");
    }else if($action == "edit"){
    	if(!isset($_GET['id']))
    		header("Location: index.php");
    	$id = (int)$_GET['id'];

    	if(!empty($_POST) && $id>0){
    		articlesEdit($db, $id, $_POST['title'], $_POST['date'], $_POST['content']);
    		header("Location: index.php");//Перенаправить
    	}
        $article = articleGet($id, $db);
        include("../views/article_admin.php");
    }else if($action == "delete"){
    	$id = (int)$_GET['id'];
    	$article = articlesDelete($id, $db);
    	header("Location: index.php");
    }
    else{
    	$articles = articlesAll($db);
    	include("../views/articles_admin.php");
    }

?>