<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Edit user Details</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function formvalidation(){
            var name = $('#inputName').val();
            var email = $('#inputEmail').val();

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
        }
    </script>
</head>
<body>
<!----Including header file---->
<?php include "header.php";?>
<div class="container">
        <div class="col-xs-6 col-xs-push-3 well">
            <!---Register Form start from Here---------------->
<form class="form-horizontal" method="post" action="update-user.php" onsubmit="return formvalidation();">
    <fieldset>
        <legend>Edit User Details</legend>
        <?php
        if(isset($_SESSION['success']))
        {
            echo($_SESSION['success']);
            unset($_SESSION['success']);
        }
        ?>
        <?php
        $user_id=$_GET['id'];
        $query="select * from users where user_id='$user_id'";
        $res=mysqli_query($conn,$query);
        $data=mysqli_fetch_array($res);
        ?>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <div class="form-group">
            <label for="Name" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="inputname" id="inputName" placeholder="Name" value="<?php echo $data['name'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email"value="<?php echo $data['email'];?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Department</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="depart" id="depart" value="admin" <?php if($data['department']=='admin'){echo "checked";}?>>
                        Admin
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="depart" id="depart" value="Web Development" <?php if($data['department']=='Web Development'){echo "checked";}?>>
                        Web Development
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="depart" id="depart" value="SEO" <?php if($data['department']=='SEO'){echo "checked";}?>>
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
                        <input type="radio" name="role" id="role" value="admin" <?php if($data['role']=='admin'){echo "checked";}?>>
                        Admin
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="role" id="role" value="employee"  <?php if($data['role']=='employee'){echo "checked";}?>>
                        Employee
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-default"><a href="dashboard.php">Cancel</a></button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </fieldset>
</form>
            <!---Register Form End Here---------------->
    </div>
</div>
</body>
</html>