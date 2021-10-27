<?php
    require "header.php"
?>
<main>
    <div class="wrapper-main">
        <section>
            <h1>Signup Form</h1>
            <!-- Sign up system -->
            <form action="includes/signup.php" method="POST">
                <input type="text" name="first" placeholder="FirstName" required>
                <br>
                <input type="text" name="last" placeholder="LastName" required>
                <br>
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="text" name="uid" placeholder="UserName" required>
                <br>
                <input type="password" name="pwd" minlength="8" placeholder="Password" required>
                <br>
                <button type="submit">Sign Up!</button>
            </form>
        </section>
    </div>
</main>
<?php
    require "footer.php";
?>