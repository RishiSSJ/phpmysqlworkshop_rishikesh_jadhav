<?php

    require ("connect.php");

    $sql = "UPDATE count SET user_count = user_count+1 where id=1 ";
    $conn->query($sql);

    $sql = "SELECT user_count FROM count where id=1 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $user_count = $row["user_count"];
            echo "Visitors : ".$user_count;
        }
    } 
    else {
        echo "no results";
    }
    
    $conn->close();

?>
