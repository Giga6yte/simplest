<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Очередь</title>

        <link href="queue/css/common.css" rel="stylesheet">
        <link href="queue/vendors/bootstrap 3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="col-sm-6">
                <h1 class="header"> Форма </h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="inputName" placeholder="Имя">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-sm-2 control-label">Телефон</label>
                        <div class="col-sm-10">
                            <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Отправить</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a class="btn btn-default" href="lessons/smarty/index.php" role="button">Smarty</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a class="btn btn-default" href="lessons/patterns/index.php" role="button">Шаблоны проектирования</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="queue/vendors/jquery 3.2.0/jquery.js"></script>
        <script src="queue/vendors/jquery 3.2.0/jquery.min.js"></script>
        <script src="queue/vendors/bootstrap 3.3.7/js/bootstrap.min.js"></script>
        <script src="queue/js/common.js"></script>
    </body>
</html>

<?php

function print_r_pre($array) {
    echo '<pre>';
    foreach ($array as $key => $value) {
        echo $key . ' -> ';
        print_r($value);
        echo '</br>';
    }
    echo '</pre>';
}

require_once ('queue/properties.php');

$dbconn = pg_connect("host=".$conn['server']." port=".$conn['port']." dbname=".$conn['dbname']." user=".$conn['user']." password=".$conn['pass']);

if ($dbconn){
    echo 'cool';
}else{
    echo 'not cool';
    
}

$query = "select * from users limit 10";

$result = pg_fetch_all(pg_query($dbconn, $query));

print_r_pre($conn);
print_r_pre($result);
?>