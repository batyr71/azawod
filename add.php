<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Создание сотрудника</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1 id="create-title">Создание сотрудника</h1>
        </header>
        <form id="add-form" method="post">	
            <div><label>Фамилия:</label><input type="text" id="lastname" name="lastname"> <span class="alert">*</span> </div><br>
            <div><label>Имя:</label><input type="text" id="firstname" name="firstname"> <span class="alert">*</span></div><br>
            <div><label>Отчество:</label><input type="text" id="middlename" name="middlename"></div><br>
            <div><label>Дата рождения:</label><input type="date" id="birthdate" name="birthdate"><span class="alert">*</span></div><br>
            <div><label>Пол:</label><select id="sex" name="sex">
                <option value="">Выберите пол</option>
                <option value="Муж." >Муж.</option>
                <option value="Жен.">Жен.</option>
                </select><span class="alert">*</span></div><br>
                <label>Фото:</label><input  type="file" id="photo" name="image" ></input><br>
            <input type="hidden" name="action" id="action"/>
            <input type="submit" name="save" value="Сохранить"></input>
            <input type="reset" value="Отменить" id="reset"></input><br>
        </form>
        <h2 class="alert">* обязательное поле или Макс размер фото 200 кБ</h2>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/js.js"></script>
    </body>
</html>