<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Assign Employee Leave</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!----Including header file---->
<?php include "header.php";?>
<div class="container">
        <div class="col-xs-10 col-xs-push-1 well">
            <!---Register Form start from Here---------------->
<form class="form-horizontal" method="post" action="insert-leave.php">
    <fieldset>
        <legend>Assign leave<a href="all-leave.php" class="btn btn-primary" style="margin:5px;"> ALL leave</a>  <a href="all-applied-leave.php" class="btn btn-primary" style="margin:5px;">All Leave Requests</a> </legend>
        <?php
        if(isset($_SESSION['success']))
        {
            echo($_SESSION['success']);
            unset($_SESSION['success']);
        }
        ?>


    </fieldset>
    <!---- left box--->
    <div class="col-xs-3" style="background-color: #d9d9d9;padding:15px;">
        <div class="form-group">
            <label class="col-lg-12"><b>Employee List</b></label>
            <input type="hidden" name="assign_by" value="<?php echo($_SESSION['user_id']); ?>">
            <div class="col-lg-12">
                <?php

                $query="SELECT * from users where `role`='employee' order by user_id Desc ";
                $res=mysqli_query($conn,$query);
                $count=mysqli_num_rows($res);
                while($row=mysqli_fetch_array($res))
                {
                ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="emp[]"  value="<?php echo $row['user_id'];?>" >
                        <?php echo $row['name'];?>
                    </label>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!---- right box--->
    <div class="col-xs-9">
        <div class="form-group">
            <label for="Name" class="col-lg-3"><b>Valid From:</b></label>
            <div class="col-lg-9">
                <input type="date" name="validfrm" placeholder="mm/dd/yyyy" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-xs-9">
        <div class="form-group">
            <label for="Name" class="col-lg-3"><b>Valid To:</b></label>
            <div class="col-lg-9">
                <input type="date" name="validto" placeholder="mm/dd/yyyy" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-xs-9">
        <div class="form-group">
            <label for="Name" class="col-lg-3"><b>Earning Leave:</b></label>
            <div class="col-lg-9">
                <input type="text" name="eleave" placeholder="No. of leave" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-xs-9">
        <div class="form-group">
            <label for="Name" class="col-lg-3"><b>Medical Leave:</b></label>
            <div class="col-lg-9">
                <input type="text" name="mleave" placeholder="No. of Leave" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-xs-9">
        <div class="form-group">
            <label for="Name" class="col-lg-3"><b>Casual Leave:</b></label>
            <div class="col-lg-9">
                <input type="text" name="cleave" placeholder="No. of Leave" class="form-control">
            </div>
        </div>
    </div>


            <div class="form-group">
                <div class="col-lg-12 col-lg-offset-3">
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