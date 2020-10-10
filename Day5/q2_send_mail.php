<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form action="" method="post" name="feedbackform" id="ff">
    
    Enter Name : <input type="text" name="name"  >
    <br>
    Enter Your Email : <input type="email" name="email" >
    <br>
    Feedback : <textarea rows="4" cols="50" name="feedback" form="ff" ></textarea>
    <br>
    <input type="submit" name="submit">
    </form>

    <?php
    
    if(isset($_POST['submit'])){

        $name=(isset($_POST['name']) ? $_POST['name'] : null );
        $email=(isset($_POST['email']) ? $_POST['email'] : null );
        $message=(isset($_POST['feedback']) ? $_POST['feedback'] : null );
        
        

            $to=$email;
            $subject="Thank You";
            $body="Thank you for your Feedback  $name";
            $send=mail($to,$subject,$body);
            if($send){
             echo "Feedback has been sent";
            }
            else echo "Please input all the parameters";
            $admin="aastha1710@gmail.com";
            $subjectadmin="$name Details";
            $bodyadmin="Name : ".$name."\n Email : ".$email."\n Feedback : ".$message;
            mail($admin,$subjectadmin,$bodyadmin);     
        
    }
    
    ?>

</body>
</html>