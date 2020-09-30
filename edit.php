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
        <title>master</title>
        <script src='function.js'></script>
        <style>
         button {
             position: relative;
             left: 120px;
         }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="form-team">
                <input type="text" class="form-control" id="name" placeholder="<?php include('placeholder_name.php')  ;?>">
            </div>
            <div class="form-team">
                <input type="text" class="form-control" id="surname" placeholder="<?php include('placeholder_surname.php')  ;?>">
            </div>
            <div class="form-team">
                <input type="text" class="form-control" id="lastname" placeholder="<?php include('placeholder_lastname.php')  ;?>">
            </div>
            <div class="form-team">
                <input type="text" class="form-control" id="sex" placeholder="<?php include('placeholder_sex.php')  ;?>">
            </div>
            <div class="form-team">
                <input type="text" class="form-control" id="wage" placeholder="<?php include('placeholder_wage.php')  ;?>">
            </div>
                <input type="text" class="form-control" id="team" placeholder="<?php include('placeholder_team.php')  ;?>">
            </div>
        </div>
        <button type="button" id="go" class="btn btn-primary">go</button>
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
                    <tr>
                        <?php  include('fetch_all.php');?>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="index.php"><button type="button" id="main-button" class="btn btn-primary">main page</button></a>
    </body>
</html>
