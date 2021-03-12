<?php session_start();?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function formvalidation(){
            var email = $('#inputEmail').val();
            var password = $('#inputPassword').val();
            var passlength = $('#inputPassword').val().length;
            if(email=='')
            {
                alert('Please enter your email');
                return false;
            }
            if(password=='')
            {
                alert('Please enter your password');
                return false;
            }
            if(passlength<8)
            {
                alert('Password must be greater than 7 character');
                return false;
            }

        }
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Employee Management System</a>
            </div>

            </div>
        </div>
    </nav>
</header>

<div class="container">
        <div class="col-xs-6 col-xs-push-3 well">
            <!---Register Form start from Here---------------->
<form class="form-horizontal" method="post" action="login-account.php" onsubmit="return formvalidation();">
    <fieldset>
        <legend>Login</legend>
        <?php
        if(isset($_SESSION['error']))
        {
            echo($_SESSION['error']);
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['successful']))
        {
            echo($_SESSION['successful']);
            unset($_SESSION['successful']);
        }
        ?>


        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">

            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </fieldset>
</form>
            <!---Register Form End Here---------------->
    </div>
</div>
</body>
</html>