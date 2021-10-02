<body>
    
<head>
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<center>
<div class="x_container">
<p class="headtitle">Student Form</p>
    <?php
        if(isset($_GET['submit'])){
            echo "<b>Last Name: </b> ".$_GET['lname'].'<p>'.'<br />';
            echo "<b>First Name: </b>".$_GET['fname'].'<p>'.'<br />';
            echo "<b>Middle Initial: </b>".$_GET['middle'].'<p>'.'<br />';
            if(!empty($_GET['course'])){
                foreach($_GET['course'] as $selected) {
                    echo "<b>Course: </b>".$selected."<p>"."<br>";
                }
            }
            if(!empty($_GET['yrlvl'])){
                foreach($_GET['yrlvl'] as $selected) {
                    echo "<b>Year Level: </b>".$selected."<p>"."<br>";
                }
            }
            if(!empty($_GET['gender'])){
                foreach($_GET['gender'] as $selected) {
                    echo "<b>Gender: </b>".$selected."<p>"."<br>";
                }
            }
            if(!empty($_GET['status'])){
                foreach($_GET['status'] as $selected) {
                    echo "<b>Gender: </b>".$selected."<p>"."<br>";
                }
            }
            echo "<b>Fathers Name: </b>".$_GET['fathname'].'<p>'.'<br />';
            echo "<b>Mothers Name: </b>".$_GET['modname'].'<p>'.'<br />';
            echo "<b>Phone Number: </b>".$_GET['phonenum'].'<p>'.'<br />';
        }
    ?> 
</div>
</center>
</body>