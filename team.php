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
        <h1>team</h1>
        <a href="index.php">main</a>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Название отдела</th>
                        <th>Количество сотрудников отдела</th>
                        <th>максимальная заработная плата</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  include('fetch_team.php');?>
                </tbody>
            </table>

    </body>
</html>
