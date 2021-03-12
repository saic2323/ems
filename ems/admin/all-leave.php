<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>All Leave</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include "header.php";?>
<div class="container">
<h4>All Employee Leave List</h4>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>S.No.</th>
            <th>Employee Name</th>
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
        $query="SELECT * from `assign_leave` t1 join `users` t2 on t1.assign_to=t2.user_id ";
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
                    <td><?php echo $row['v_from'];?></td>
                    <td><?php echo $row['v_to'];?></td>

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