<?php  
$pdo = new PDO("mysql:host=localhost;dbname=global, charset=utf8","root","qwerty123");
$sql = "SELECT name, author, year, isbn, genre FROM global";
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
        <h1>
            База бизнес-книг
            </h1>
        <?php
      foreach ($pdo->query($sql) as $row){
echo $row['name']."<br />";
}
?>  
    </body>
</html>