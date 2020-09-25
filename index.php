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
        <title>master crud tech task</title>
        <script src='function.js'></script>
    </head>
    <body>
        <h1>master of coding the kung-fu</h1>
        <a href="team.php">team-r</a><br/><br/>
        <a href="employeer.php">employeer-e</a>
        <form>
            <input type="text" id="name">
            <input type="text" id="surname">
            <input type="text" id="lastname">
            <input type="text" id="sex">
            <input type="text" id="wage">
            <input type="text" id="team">
            <button type="button" class="btn btn-danger" id="go">go</button>
        </form>
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
    </body>
</html>
