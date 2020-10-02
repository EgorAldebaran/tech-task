<?php  include('delete.php');?>
<!doctype html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' href='style.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>master</title>
        <script>
         $(document).ready(function() {
             $("form").submit(function(event) {
                 event.preventDefault();
                 let formValues = $(this).serialize();
                 $.post("model.php", formValues, function(data) {
                     $("#result").html(data);
                 })
             })
         })
        </script>
    </head>
    <body>
        <!-- место для ввода данных используем bootstrap form validate js -->
        <div class="container">
            <form class="was-validated">
                <div class="form-group">
                    <label for="uname">Имя:</label>
                    <input type="text" class="form-control" id="name" placeholder="введите ваше Имя" name="name" required>
                    <div class="valid-feedback">valid.</div>
                    <div class="invalid-feedback">Пожалуйста заполните это поле</div>
                </div>
                <div class="form-group">
                    <label for="uname">Фамилия:</label>
                    <input type="text" class="form-control" id="surname" placeholder="Введите вашу Фамилию" name="surname" required>
                    <div class="valid-feedback">хорошо</div>
                    <div class="invalid-feedback">Пожалуйста заполните это поле</div>
                </div>
                <div class="form-group">
                    <label for="uname">Отчество:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Введите ваше Отчество" name="lastname" required>
                    <div class="valid-feedback">хорошо</div>
                    <div class="invalid-feedback">Пожалуйста заполните это поле</div>
                </div>
                <div class="form-group">
                    <label for="uname">Пол:</label>
                    <input type="text" class="form-control" id="sex" placeholder="Укажите Ваш пол" name="sex" required>
                    <div class="valid-feedback">хорошо</div>
                    <div class="invalid-feedback">Пожалуйста заполните это поле</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Зарплата:</label>
                    <input type="password" class="form-control" id="wage" placeholder="Какая у вас Зарплата?" name="wage" required>
                    <div class="valid-feedback">хорошо</div>
                    <div class="invalid-feedback">Пожалуйста заполните это поле</div>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <select name="team[]" multiple>
                            <option value="junior">junior</option>
                            <option value="midle">midle</option>
                            <option value="senior">senior</option>
                            <div class="valid-feedback">хорошо</div>
                            <div class="invalid-feedback">выберите группу</div>
                        </select>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">submi</button>
            </form>
        </div>












        <div id="result">

        </div>

        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Отчество</th>
                        <th>пол</th>
                        <th>заработная плата</th>
                        <th>название отдела</th>
                        <th>удалить</th>
                        <th>редактировать</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  include('fetch_all.php');?>
                </tbody>
            </table>
        </div>
        <a href="index.php">main</a>
    </body>
</html>
