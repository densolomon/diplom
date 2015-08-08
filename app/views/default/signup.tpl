<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Вход в интернет магазин</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/signup.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <form action="/register" class="form-signup" method="POST">
        <h2 class="form-signup-heading">Регистрация</h2>
        <div class="form-group">
            <label class="control-label col-xs-3" for="firstName">Имя:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="firstName" placeholder="Введите имя">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Имя:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="email" placeholder="Введите E-mail">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Имя:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="pass" placeholder="Введите пароль">
            </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>