<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Реестр сотрудников</title>
        <link rel="stylesheet" href="/style/style.css">
</head>
<body>

        <div class="row">
                <h1>Ресстр сотрудников</h1>
                <a href="/add.php">+ Добавить сотрудника</a>
        </div>
        <div id="search-box">
            <form id="search-form" action="classes/search.php" method="post">
                <input id="search" name="search" type="search" placeholder="Поиск">
                        <div class="row">
                                <div>
                                        <label for="">Пол:</label><br>
                                        <input id="boy" name="sex[]" type="checkbox" value="Муж" > Муж<br>
                                        <input id="girl" name="sex[]" type="checkbox" value="Жен"> Жен<br>
                                </div>
                                <div>
                                        <label for="">Возраст:</label><br>
                                        <input id="ages" name="ages" type="number"min="10" max="100" placeholder="с"><br>
                                        <input id="agepo" name="agepo" type="number" min="10" max="100" placeholder="по"><br>
                                </div>
                                <button type="submit">Поиск</button>
                        </div>
                </form>
        </div>
        <div id="search-output">
                
        </div>	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>