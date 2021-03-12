<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Task</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include "header.php";?>
<div class="container">
<h4>Task Lists <a href="task.php" class="btn btn-primary" style="margin:5px;">ASSIGN TASK</a></h4>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>S.No.</th>
            <th>Task</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        $query="SELECT * from task";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><a href="view-message.php?id=<?php echo $row['t_id'];?>"><?php echo substr($row['task'],0,50);?></a></td>
                    <td><?php echo $row['date_time'];?></td>
                    <td><a href="view-message.php?id=<?php echo $row['t_id'];?>">view</a> </td>
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