<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Реестр сотрудников</title>
        <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <h1>Создание сотрудника</h1>
    <form id="create-form" action="/classes/add.php" method="post">
        <div class="row"><label for="">Фамилия:</label><input id="firstname" type="text" name="lastname"><p class="req">*</p></div>
        <div class="row"><label for="">Имя:</label><input id="lastname" type="text" name="firstname"><p class="req">*</p></div>
        <div class="row"><label for="">Отчество:</label><input type="text" name="middlename"></div>
        <div class="row"><label for="">Дата рождения:</label><input id="birthdate" type="date" name="birthday"><p class="req">*</p></div>
        <div class="row"><label for="">Пол:</label>
            <select name="sex" id="sex">
                <option value="">Выберите пол</option>
                <option value="Муж">Муж</option>
                <option value="Жен">Жен</option>
            </select><p class="req">*</p></div>
        <div class="row"><label for="">Фото:</label><input id="image" type="file" name="image"></div>
        <div id="btn"><button type="submit">Сохранить</button>
            <button id="reset"type="reset">Отменить</button></div>
    </form>
    <p class="req">* обязательные поля</p>
    <p class="img">файл не должен превышать 200кб</p>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>