<!DOCTYPE HTML>
<?php include('server.php') ?>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <?php include('errors.php') ?>
            <div class = "input-group">
                <label>E-mail</label>
                <input type="text" name="email" value="<?php echo $username; ?>">
            </div>
            <div class = "input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $email; ?>">
            </div>
            <div class = "input-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo $password_1; ?>">
            </div>
            <div class = "input-group">
                <label>Confirm password</label>
                <input type="password" name="conf_password" value="<?php echo $password_2; ?>">
            </div>
            <div class = "input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>Already a user? Log in <a href="login.php">here</a></p>
        </form>
    </body>
</html>
