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
                    <a href="index.php?action=add">Добавить статью</a>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Заголовок</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $a): ?>
                        <tr>
                            <td><?php echo $a['date'] ?></td>
                            <td><?php echo $a['title'] ?></td>
                            <td><?php echo '<a href="index.php?action=edit&id='.$a['id'].'">'.'Редактировать'.'</a>'?></td>
                            <td><?php echo '<a href="index.php?action=delete&id='.$a['id'].'">'.'Удалить'.'</a>'?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

        </div>
    </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2017</p>
    </footer>
</body>
</html>