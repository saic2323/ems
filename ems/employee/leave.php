<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Leave</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<>
<?php include "header.php";?>
<div class="container">
<h4>Leave Lists  <a href="applied-leave.php" class="btn btn-primary" style="margin:5px;"> Applied Leaves</a></h4>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>Name</th>
            <th>Earning Leave</th>
            <th>Medical Leave</th>
            <th>Casual Leave</th>
            <th>Valid From</th>
            <th>Valid To</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        $user_id=$_SESSION['user_id'];
        $query="SELECT * from `assign_leave` t1 join `users` t2 on t1.assign_to=t2.user_id where t2.user_id = $user_id";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td ><?php echo $row['name'];?></td>
                    <td class="eleave"><?php echo $row['e_leave'];?></td>
                    <td class="mleave"><?php echo $row['m_leave'];?></td>
                    <td class="cleave"><?php echo $row['c_leave'];?></td>
                    <td class="v_from"><?php echo $row['v_from'];?></td>
                    <td class="v_to"><?php echo $row['v_to'];?></td>

                </tr>
                <?php
                $i++;}
        }
        else{
            echo"No Record Found";
        }?>
        </tbody>
    </table>
    <div class="col-xs-6 col-xs-push-3 well">
    <form class="form-horizontal" method="post" action="apply-leave.php">
        <fieldset>
            <legend>Apply for leave </legend>
            <?php
            if(isset($_SESSION['success']))
            {
                echo($_SESSION['success']);
                unset($_SESSION['success']);
            }
            ?>


        </fieldset>
 <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">

        <div class="col-xs-9">
            <div class="form-group">
                <label for="Name" class="col-lg-3"><b>Leave From:</b></label>
                <div class="col-lg-9">
                    <input type="date" name="l_from" placeholder="mm/dd/yyyy" class="form-control" onblur="checkDate(this.value)">
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label for="Name" class="col-lg-3"><b>Leave To:</b></label>
                <div class="col-lg-9">
                    <input type="date" name="l_to" placeholder="mm/dd/yyyy" class="form-control" onblur="checkDate(this.value)" >
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label for="Name" class="col-lg-3"><b>Earning Leave:</b></label>
                <div class="col-lg-9">
                    <input type="text" name="eleave" placeholder="No. of leave" class="form-control" onblur="checkeleavequan(this.value)">
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label for="Name" class="col-lg-3"><b>Medical Leave:</b></label>
                <div class="col-lg-9">
                    <input type="text" name="mleave" placeholder="No. of Leave" class="form-control" onblur="checkmleavequan(this.value)">
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <label for="Name" class="col-lg-3"><b>Casual Leave:</b></label>
                <div class="col-lg-9">
                    <input type="text" name="cleave" placeholder="No. of Leave" class="form-control" onblur="checkcleavequan(this.value)">
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-lg-12">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!---Register Form End Here---------------->
</div>
</div>

</form>
</div>
    </div>
</div>
<script>
    function checkDate(str)
    {

        var vfrm = $('.v_from').text();
        var vto = $('.v_to').text();
        var lfrm=str;

        var date1 = new Date(vfrm);
        var date2 = new Date(lfrm)
        var diffDays= parseInt((date2-date1)/(1000*3600*24));

        var date3 = new Date(lfrm);
        var date4 = new Date(vto)
        var diffDays2= parseInt((date4-date3)/(1000*3600*24));
        if(diffDays>=0 && diffDays2>=0){
            return true;
        }
        else{
            alert("Please enter valid date");
            return false;
        }

    }
    function checkeleavequan(str){
        var vfrm = $('.eleave').text();
        var lqty=str;
        if(vfrm>=lqty){
            return true;
        }else{
            alert('Please enter valid earning leave quantity');
            return false;
        }

    }
    function checkmleavequan(str){
        var vfrm = $('.mleave').text();
        var lqty=str;
        if(vfrm>=lqty){
            return true;
        }else{
            alert('Please enter valid medical leave quantity');
            return false;
        }

    }
    function checkcleavequan(str){
        var vfrm = $('.cleave').text();
        var lqty=str;
        if(vfrm>=lqty){
            return true;
        }else{
            alert('Please enter valid casual leave quantity');
            return false;
        }

    }
</script>
</body>
</html>