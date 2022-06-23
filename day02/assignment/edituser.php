<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
   <h2> Edit User</h2>
   <form autocomplete = "off" action="" method="post">
        <?php
            require 'config.php';
            
            $id = true;
            $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users"));

            if (isset($_GET["id"])){     
                $id = $_GET["id"];
                $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
            }
        ?>
        <?php 
            echo "ini id = ", $rows['id'];
        ?>
        <input type="hidden" id = "id" value = "<?php echo $rows['id'];?>">
        <label for="">Name</label>
        <input type="text" id = "name" value = "<?php echo $rows['name'];?>"> <br>
        <label for="">Email</label>
        <input type="text" id = "email" value = "<?php echo $rows['email'];?>"> <br>
        <label for="">Gender</label>
        <select class="" id="gender">
            <option value="Male" <?php if($rows['gender'] == 'Male') echo 'selected'?> >Male</option>
            <option value="Female" <?php if ($rows['gender'] == 'Female') echo 'selected' ?> >Female</option>
        </select> <br>
        <button type = "button" onclick = "submitData('edit');"> Edit </button>
   </form>
   <br>
   <a href="index.php">Go to Index</a>
   <?php require 'script.php'; ?>
</body>
</html>