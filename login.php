<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet" media="screen and (max-device-width: 767px)">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="login">
        <article>
            <form id="loginform" role="form" method="POST">
                <img src="images/loginPage-logo.png" alt="CareVision" class="logo">
                <input type="hidden" name="_token" value="1KQ2MfrOX3c6cy2S2jClSgY6EsgkjtrCMgxLaDUH">
                <input id="email" type="email" name="email" placeholder="Email Address" value="" required="" autofocus="">
                <input id="password" type="password" name="password" placeholder="Password" required="">
                <div class="select unit">
                    <select>
                        <option>Unit</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
                <div class="select floor">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
                <div class="clearfix text-left">
                    <div class="rememberMe clearfix">
                        <span class="toggles">
                            <input type="checkbox" name="remember" id="remember" class="ios-toggle" checked>
                            <label for="remember" class="checkbox-label" data-off="NO" data-on="YES"></label>
                        </span>
                        <label>Remember Me</label>
                    </div>
                    <button type="submit" class="pull-right"><img src="images/padlock.svg" class="svg">Sign In</button>
                </div>
                <hr>
                <a href="http://localhost/laravel/public/password/reset">Forgot Your Password?</a>
            </form>
        </article>
    </section>
    <span class="loginCopy">&copy; <?php echo date('Y');?> CareVision Management Ltd. All Rights Reserved.</span>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
