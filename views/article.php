<!DOCTYPE>
<html>

<head>
    <title>My first Blog</title>
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
            <article class="article">
                <h3><?php echo $article['title'] ?></h3>
                <em><?php echo $article['date'] ?></em>
                <p><?php echo $article['content'] ?></p>
            </article>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2017</p>
    </footer>
</body>
</html>