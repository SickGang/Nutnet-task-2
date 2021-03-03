<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Форма</title>
</head>
<body>
<div class="container">
    <form class="mt-5 form">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
            <input type="text" name="name" class="form-control" placeholder="Имя" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Фамилия</label>
            <input type="text" name="surname" class="form-control" placeholder="Фамилия" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Возраст</label>
            <input type="text" name="age" class="form-control" placeholder="Возраст - (числовой формат)" pattern="^[0-9]+$" required>
        </div>
        <button class="btn btn-primary send">Сохранить</button>
        <input type="button" class="btn btn-success upload" value="Выгрузить" />
    </form>
    <div class="alert alert-success mt-3" role="alert" style="display: none;">
    </div>
    <div class="alert alert-danger mt-3" role="alert" style="display: none;">
        Произошла ошибка!
    </div>
    <div class="alert alert-info mt-3" role="alert" style="display: none">
        Данные успешно загружены в таблицу - <a href="https://docs.google.com/spreadsheets/d/1L8kXBv4wCdavs1S6PpoC6rbt8IT7-IrCGxkFLUA4pHU/edit?usp=sharing" target="_blank">ссылка</a>
    </div>

    <div class="loader">
        <div class="lds-dual-ring"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
