<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Шаблоны проектирования</title>

        <link href="../../css/common.css" rel="stylesheet">
        <link href="../../vendors/bootstrap 3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="col-sm-6">
                <h1 class="header"> &nbsp; </h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a class="btn btn-default" href="singleton.php" role="button">Singleton (одиночка)</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a class="btn btn-default" href="factory.php" role="button">Factory (фабрика)</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a class="btn btn-default" href="strategy.php" role="button">Strategy (стратегия)</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="../../vendors/jquery 3.2.0/jquery.min.js"></script>
        <script src="../../vendors/bootstrap 3.3.7/js/bootstrap.min.js"></script>
        <script src="../../js/common.js"></script>
    </body>
</html>