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
    </head>
    <body>
        <h1>master</h1>
        <a href="employeer.php">employeer</a>
        <a href="team.php">team</a>
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
                        <th>название группы</th>
                        <th>Количество работников</th>
                        <th>максимальная заработная плата</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  include("fetch_join.php");?>
                </tbody>
            </table>
        </div>
    </body>
</html>
