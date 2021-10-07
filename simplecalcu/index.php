<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>
<body>
    <center>
        <form action=" " method="get">
            <input type="number" name="n1" placeholder="Enter the first value"
            value="<?php echo (isset($_GET['n1']) ? $_GET['n1']: '') ?>"><br \>
            
            <input type="number" name="n2" placeholder="Enter the second value" 
            value="<?php echo (isset($_GET['n2']) ? $_GET['n2']: '') ?>"><br \> 
            <!-- shorthand condition -->

            <button type="submit" name="add">+</button>
            <button type="submit" name="subtract">-</button>
            <button type="submit" name="multiply">x</button>
            <button type="submit" name="divide">÷</button>
        </form>
    

    <?php
        $result = 0;// default value of the result

        if(isset($_GET['add'])){
            $result = $_GET['n1'] + $_GET['n2']; 
            echo "Result: ".$_GET['n1']." + ".$_GET['n2']." = ".$result;
        }

        
        elseif(isset($_GET['subtract'])){
            $result = $_GET['n1'] - $_GET['n2']; 
            echo "Result: ".$_GET['n1']." - ".$_GET['n2']." = ".$result;
        }


        elseif(isset($_GET['multiply'])){
            $result = $_GET['n1'] * $_GET['n2']; 
            echo "Result: ".$_GET['n1']." x ".$_GET['n2']." = ".$result;
        }


        elseif(isset($_GET['divide'])){
            $result = $_GET['n1'] / $_GET['n2']; 
            echo "Result: ".$_GET['n1']." ÷ ".$_GET['n2']." = ".$result;
        }

    ?>
    </center>
</body>
</html>