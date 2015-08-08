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
    <link href="/css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function animate(elem){
            var effect = elem.data("effect");
            elem.addClass("animated " + effect).one('webkitAnimationEnd mozAnimationEnd' +
            'MSAnimationEnd oanimationend animationend', function(){
                elem.removeClass("animated " + effect);
            });
        }
        $(document).ready(function(){
            $(".flip").mouseenter(function(){
                animate($(this));
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Вход в интернет магазин</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">
                    Запомнить
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>
    </div>
</body>
</html>