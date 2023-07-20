<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
    <section class="login">
        <article>
            <form id="loginform" role="form" method="POST">
                <img src="images/logo.webp" alt="CareVision" class="logo">

                <input id="username" type="text" name="usrname" placeholder="User Name" value="" required="" autofocus="" tabindex="1">

                <input id="password" type="password" name="password" placeholder="Password" required="" tabindex="2">
                <i></i>

                <div class="select">
                    <select tabindex="3">
                        <option>Select Home</option>
                    </select>
                </div>

                <div class="select">
                    <select tabindex="4">
                        <option>Select Floor</option>
                    </select>
                </div>

                <div class="select">
                    <select tabindex="5">
                        <option>Keep Me Logged In</option>
                        <option>For 15 minutes</option>
                        <option>For 30 minutes</option>
                        <option>For 45 minutes</option>
                        <option>For 60 minutes</option>
                        <option>For 2 hours</option>
                        <option>For 12 hours</option>
                    </select>
                </div>

                <button type="submit" class="pull-right" tabindex="6">Log In</button>
            </form>
        </article>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
