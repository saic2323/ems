<?php include "../auth/auth.php";?>
<?php include "authentication.php"; ?>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include "header.php";?>

<div class="container">
    <?php
    echo"Welcome to admin Dashboard"
    ?>
    <h4>User records</h4>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $query="SELECT * from users";
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
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['department'];?></td>
            <td><?php echo $row['role'];?></td>
           <td><a href="edit-user.php?id=<?php echo $row['user_id'];?>">Edit</a> | <a href="delete-user.php?id=<?php echo $row['user_id'];?>">Delete</a> </td>
        </tr>
        <?php
            $i++;}
            }
            else{
                echo"No Record Found";
            }?>
        </tbody>
    </table>
</div></div>
</body>
</html>