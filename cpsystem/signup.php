<?php
    require "header.php"
?>
<main>
    <div class="wrapper-main">
        <section>
            <h1>Signup Form</h1>
            <!-- Sign up system -->
            <form action="includes/signupphpcode.php" method="POST">
                <input type="text" name="uid" placeholder="UserName" >
                <br>
                <input type="email" name="mail" placeholder="Email">
                <br>
                <input type="password" name="pwd" minlength="8" placeholder="Password">
                <br>
                <button type="submit" name="signup-submit">Sign Up!</button>
            </form>
        </section>
    </div>
</main>
<?php
    require "footer.php";
?>