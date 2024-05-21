<?php 

include('connection.php');

//feching data 
$id =$_GET['editId'];
$sql="SELECT * FROM `curd` WHERE id=$id";
$result= mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$address = $row['address'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Users</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5 p-5">
        <form method="post" action="function.php?editId=<?php  echo $id ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="username" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" name="useremail" value="<?php echo $email ?>">
            </div>
             <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your Address" name="useraddress" value="<?php echo $address ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="editFormsubmit">Submit</button>
        </form>
    </div>
</body>
</html>

