<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="get">
Enter Side A <input type="text" name="a"/><br/>
Enter Side B <input type="text" name="b"/><br/>
Enter Side C <input type="text" name="c"/><br/>
<input type="submit"/>
</form>
</body>
</html>

<?php
$a = (isset($_GET['a']) ? $_GET['a'] : null);
$b = (isset($_GET['b']) ? $_GET['b'] : null);
$c = (isset($_GET['c']) ? $_GET['c'] : null);


     if(is_numeric($a) && is_numeric($b) && is_numeric($c) && $a>0 && $b>0 && $c>0)
        {
            if($a==$b && $b==$c)
            {
                echo "<h2>Equilateral Triangle</h2>";
            }
            elseif ($a==$b || $b==$c || $a==$c)
            {
                echo "<h2>Isosceles Triangle</h2>";
            }
            else if((($a**2+$b**2)==$c**2) || 
					(($c**2+$b**2)==$a**2) || 
					(($a**2+$c**2)==$b**2) ){
				echo "<h2>Triangle is Right Angled</h2>";
			}
            else
            {
                echo "<h2>Scalene Triangle</h2>";
            }
        }  
        else echo "<h4>Please enter Positive Integers only </h4>"; 
     
?>