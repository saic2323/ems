<?php include "../auth/auth.php"; ?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>All Leave Requests </title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include "header.php";?>
<?php
if(isset($_POST['approved'])){
    $status = "Approved";
    $comment=$_POST['comment'];
    $id=$_POST['id'];


    $query = "UPDATE `applied_leave` set `status`='$status',`comment`= '$comment' where `id`='$id'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        $_SESSION['success'] = "Leave Approved";
        unset($_SESSION['success']);
    } else {
            echo "Leave Approval Failed";
        }
    }

if(isset($_POST['rejected'])){
    $status = "Rejected";
    $comment=$_POST['comment'];
    $id=$_POST['id'];

    $query = "UPDATE `applied_leave` set `status`='$status',`comment`= '$comment' where `id`='$id'";
    $res = mysqli_query($conn, $query);

    if ($res) {
        $_SESSION['success'] = "Leave Rejected";
        unset($_SESSION['success']);
        } else {
            echo "Leave Approval Failed";
        }
    }




?>
<div class="container">
<h4>All Leave Requests</h4>
    <?php if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
    } ?>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>S.No</th>
            <th>Employee Name</th>
            <th>Earning Leave</th>
            <th>Medical Leave</th>
            <th>Casual Leave</th>
            <th>From</th>
            <th>To</th>
            <th>Status</th>
            <th>comment</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        $query="SELECT * from `applied_leave` t1 join `users` t2 on t1.apply_by=t2.user_id ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['e_leave'];?></td>
                    <td><?php echo $row['m_leave'];?></td>
                    <td><?php echo $row['c_leave'];?></td>
                    <td><?php echo $row['l_from'];?></td>
                    <td><?php echo $row['l_to'];?></td>
                    <td style="color:green;"><?php echo $row['status'];?></td>
                    <td>
                        <form method ="post" action="#">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <textarea name="comment"></textarea> </td>
                    <td>
                        <button type="submit" name="approved" class="btn btn-primary">Approve</button>
                        <button type="submit" name="rejected" class="btn btn-primary">Reject</button></form>
                    </td>


                </tr>
                <?php
                $i++;}
        }
        else{
            echo"No Record Found";
        }?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>