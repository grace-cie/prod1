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
            echo "Last Name: ".$_GET['lname'].'<p>'.'<br />';
            echo "First Name: ".$_GET['fname'].'<p>'.'<br />';
            echo "Middle Initial: ".$_GET['middle'].'<p>'.'<br />';
            if(!empty($_GET['course'])){
                foreach($_GET['course'] as $selected) {
                    echo "Course: ".$selected."<br>";
                }
            }
            if(!empty($_GET['yrlvl'])){
                foreach($_GET['yrlvl'] as $selected) {
                    echo "Year Level: ".$selected."<br>";
                }
            }
            if(!empty($_GET['gender'])){
                foreach($_GET['gender'] as $selected) {
                    echo "Gender: ".$selected."<br>";
                }
            }
            if(!empty($_GET['status'])){
                foreach($_GET['status'] as $selected) {
                    echo "Gender: ".$selected."<br>";
                }
            }
            echo "Fathers Name: ".$_GET['fathname'].'<p>'.'<br />';
            echo "Mothers Name: ".$_GET['modname'].'<p>'.'<br />';
            echo "Phone Number: ".$_GET['phonenum'].'<p>'.'<br />';
        }
    ?> 
</div>
</center>
</body>