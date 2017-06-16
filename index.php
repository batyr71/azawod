<?php
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Реестр</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
                <h1>Реестр сотрудников</h1>
                <a href="add.php">+Добавить сотрудника</a>	
        </header>
    <div id="form">
        <form id="search-form" action="" method="post">	
            <input  id="search" name="search" type="search" placeholder="Поиск"><br>
            <label>Пол</label><br>
            <input type="checkbox" name="man" id="man"><span>Муж</span><br>
            <input type="checkbox" name="woman" id="woman"><span>Жен</span><br>
                <label>Возраст:</label><br>
                <input type="number" name="from" id="from" placeholder="с" value=""><br>
                <input type="number" name ="to" id="to" placeholder="по" value="">
                <input type="submit" value="Поиск"></input>
            </div>
        </form>
    </div>
    <div id="table"> </div>

    <div id="pages">
                <span>Страницы</span>
                <a href="">1</a><a href="">2</a><a href="">3</a>
        </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>


