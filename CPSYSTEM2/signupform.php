<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@700&display=swap');
    body{
		background: #f1f1f1;
	}
    .wrapper-main {
    background: #caebf2;
    height: 394px;
    width: 435px;
    border-radius: 14px;
    position: relative;
    top: 410px;
    }
    .addform {
        position: inherit;
		top: 28px;
	}
    input[name="name"]::placeholder {        
		text-align: center;
	}input[name="uid"]::placeholder {        
		text-align: center;
	}input[name="pwd"]::placeholder {        
		text-align: center;
	}
	input {
        height: 46px;
        width: 69%;
        font-size: 34px;
        border: none;
        text-align: center;
        font-family: 'Public Sans', sans-serif;
    }
    .inpt-usr-n {
        position: relative;
        top: 7px;
    }
    .inpt-pwd-n {
        position: relative;
        top: 15px;
    }
    button {
		height: 60px;
		width: 70%;
		position: relative;
		top: 24px;
		border: none;
		background: #ff3b3f;
		color: #ffffff;
		font-size: 36px;
		font-family: 'Public Sans', sans-serif;
	}
    .error {
        position: inherit;
        top: 50px;
        font-family: 'Public Sans', sans-serif;
        color: red;
        font-size: 18px;
    }
    h2 {
    	font-family: 'Public Sans', sans-serif;
		font-size: 36px;
    	color: #a9a9a9;
	}
</style>
<center>
<body>
    <div class="wrapper-main">
            <!-- Sign up system -->
            <form class="addform" action="signup.php" method="POST">
            <h2>Add User</h2>
                <input type="text" name="name" placeholder="Name" >
                <input class="inpt-usr-n" type="text" name="uname" placeholder="UserName">
                <input class="inpt-pwd-n" type="password" name="pwd" placeholder="Password">
                <button class="sbmt" type="submit" name="signup-submit">Sign Up!</button>
            </form>
            <?php if (isset($_GET['error'])) { ?>
     		    <p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
    </div>
    
</body>
</center>
</html>