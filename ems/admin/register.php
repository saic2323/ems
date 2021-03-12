<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function formvalidation(){
            var name = $('#inputName').val();
            var email = $('#inputEmail').val();
            var password = $('#inputPassword').val();
            var passlength = $('#inputPassword').val().length;
            if(name=='')
            {
                alert('Please enter your name');
                return false;
            }
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
<!----Including header file---->
<?php include "header.php";?>
<div class="container">
        <div class="col-xs-6 col-xs-push-3 well">
            <!---Register Form start from Here---------------->
<form class="form-horizontal" method="post" action="insert%20user.php" onsubmit="return formvalidation();">
    <fieldset>
        <legend>Register</legend>
        <?php
        if(isset($_SESSION['success']))
        {
            echo($_SESSION['success']);
            unset($_SESSION['success']);
        }
        ?>


    </fieldset>
<div class="form-group">
                <label for="Name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="inputname" id="inputName" placeholder="Name">
                </div>
            </div>
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
                <label class="col-lg-2 control-label">Department</label>
                <div class="col-lg-10">
                        <div class="radio">
                            <label>
                                <input type="radio" name="department" id="depart" value="admin" checked="">
                                Admin
                            </label>
                        </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="depart" id="depart" value="Web Development">
                            Web Development
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="depart" id="depart" value="SEO">
                            SEO
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label">Role</label>
                <div class="col-lg-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="role" id="role" value="admin" checked="">
                            Admin
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="role" id="role" value="employee">
                            Employee
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!---Register Form End Here---------------->
    </div>
</div>
</form>
</body>
</html>