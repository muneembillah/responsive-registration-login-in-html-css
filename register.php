<?php include("checksignup.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up by Muneem Billah</title>
    <?php include("head.php"); ?>
</head>
<body>
    <div class="container">
        <div class="mamb_border">
        <h1 align="center">Sign Up</h1>
        <p align="center">Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <center>
                    <input type="submit" class="btn btn-primary btn-block mamb_btn" value="Submit"><br>
                    <input type="reset" class="btn btn-danger btn-block mamb_btn" value="Clear">
                </center>
            </div>
            <p align="center">Already have an account? <a href="<?php echo $site_url; ?>/login.php">click here to Login</a>.</p>
        </form>
        </div><!--.mamb_border-->
    </div><!--.container-->

<div class="mamb_footer">
    <a href="<?php echo $site_url; ?>/">Home</a> &nbsp; | &nbsp; 
    <a href="<?php echo $site_url; ?>/login.php">Login</a> &nbsp; | &nbsp; 
    Sign Up
</div><!--.mamb_footer-->
</body>
</html>