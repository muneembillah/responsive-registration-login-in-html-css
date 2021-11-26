<?php include("checklogin.php"); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login by Muneem Billah</title>
    <?php include("head.php"); ?>
</head>
<body>
    <div class="container">
        <div class="mamb_border">
        <h1 align="center">Login to Dashboard</h1>
        <p align="center">Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" align="center">
                <input type="submit" class="btn btn-primary btn-block mamb_btn" value="Login"><br>

                <input type="reset" class="btn btn-danger btn-block mamb_btn" value="Clear">
            </div>
            <p align="center">Don't have an account? <a href="<?php echo $site_url; ?>/register.php">Register now</a>.</p>
        </form>
        </div><!--.mamb_border-->
    </div><!--.container-->

<div class="mamb_footer">
    <a href="<?php echo $site_url; ?>/">Home</a> &nbsp; | &nbsp; 
    <a href="<?php echo $site_url; ?>/register.php">Register</a> &nbsp; | &nbsp; 
    Login
</div><!--.mamb_footer-->

</body>
</html>