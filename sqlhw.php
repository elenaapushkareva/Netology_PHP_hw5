<?php  
$pdo = new PDO('mysql:host=localhost;port=8889;dbname=books','root','root');
$sql = "SELECT name, author, year, isbn, genre FROM books";
?>

<!DOCTYPE> 
<html lang="ru">
    <head>
        <title>
            <p>
                Базы данных
            </p>
        </title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;
            }
        </style>
    </head>
<body>
<h1>База бизнес-книг</h1>

<table>
    <tr>
        <td>Название</td>
         <td>Автор</td>
        <td>Год</td>
        <td>Isbn</td>
        <td>Жанр</td>
    </tr>
    <?php foreach ($pdo->query($sql) as $row){ ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['author'] ?></td>
        <td><?php echo $row['year'] ?></td>
        <td><?php echo $row['isbn'] ?></td>
        <td><?php echo $row['genre'] ?></td>

    </tr><?php } ?>
</table>
</body>
</html>