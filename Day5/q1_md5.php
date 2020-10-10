<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Enter Username <input type="text" name="name">
    <br>
    Enter Password <input type="password" name="password">
    <br>
    <input type="submit" name="submit">
    </form>

    <?php
    require ("connect.php");

    if(isset($_POST['submit'])){

        $name=(isset($_POST['name']) ? $_POST['name'] : null );
        $password=(isset($_POST['password']) ? $_POST['password'] : null );
        
        
        if(!empty($name && $password)){
            
            $password=md5($password);
            $sql="INSERT into users (username,enc_pass) VALUES('$name','$password')";
            if (mysqli_query($conn, $sql)) {
                echo "<br>";
                echo "New User added successfully !";
            } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
            mysqli_close($conn);
            
        }
        else echo "Input Values";
        // mysqli_close($conn);

        
    }   


    
    
    ?>
    
</body>
</html>