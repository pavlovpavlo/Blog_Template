<!DOCTYPE>
<html>
<head>
    <title>Admin Panel</title>
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
   <link rel="stylesheet" type="text/css" href="..\css\main.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Мой  первый блог</h1>
        <div class="article-container">
            <form action="index.php?action=<?php echo $_GET['action']?>&id=<?php echo $_GET['id']?>" method="POST" class="form">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $article['title'] ?>" autofocus required>
                </div>              
                <div class="form-group">
                    <label for="date">Дата</label>
                    <input type="date" name="date" id="date" class="form-control" value="<?php echo $article['date'] ?>" required>
                </div>                
                <div class="form-group">
                    <label for="content">Содержимое</label>
                    <textarea name="content" id="content" class="form-control" required><?php echo $article['content'] ?></textarea>
                </div>                
                <input type="submit" class="btn" value="Сохранить" required>
            </form>
        </div>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2017</p>
    </footer>
</body>
</html>