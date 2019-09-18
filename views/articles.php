<!DOCTYPE>
<html>
<head>
    <title>My first Blogs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css\main.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Мой  первый блог</h1>
        <a href="admin">Панель администратора</a>
        <div class="article-container">
        	<?php foreach($articles as $a): ?>
            <article class="article">
                <h3><?php echo '<a href="article.php?id='.$a['id'].'">'.$a['title'].'</a>'?></h3>
                <em><?php echo $a['date'] ?></em>
                <p><?php echo articlesIntro($a['content'])?></p>
            </article>
        <?php endforeach ?>
        </div>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2017</p>
    </footer>
</body>
</html>