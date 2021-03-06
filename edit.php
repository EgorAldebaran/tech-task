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
        <title>mega-master</title>
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
        <div class="container">
            <form>
                <div class="form-group">
                    <input type="text" name="name" placeholder="<?php  include('placeholder_name.php');?>">
                </div>
                <div class="form-group">
                    <input type="text" name="surname" placeholder="<?php  include('placeholder_surname.php');?>">
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" placeholder="<?php  include('placeholder_lastname.php');?>">
                </div>
                <div class="form-group">
                    <input type="text" name="sex" placeholder="<?php  include('placeholder_sex.php');?>">
                </div>
                <div class="form-group">
                    <input type="number" name="wage" placeholder="<?php  include('placeholder_wage.php');?>">
                </div>
                <div class="form-group">
                    <select name="team[]" multiple>
                        <option value="junior">junior</option>
                        <option value="midle">midle</option>
                        <option value="senior">senior</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="send" class="btn btn-primary">
                </div>
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
