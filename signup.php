<?php require_once 'controllers/authController.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="style.css">

    <title>Register</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form.div">
              <form action:"signup.php" method="post">
                 <h3 class="text-center">Register</h3>

                <!--<div class="alert alert-danger">
                   <li>Username required</li>
                </div>-->

                 <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                 </div>

                 <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo email; ?>" class="form-control form-control-lg">
                 </div> 

                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="passsword" name="password" class="form-control form-control-lg">
                 </div>

                 <div class="form-group">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="text" name="passwordConf" class="form-control form-control-lg">
                 </div>

                 <div class="form-group">
                    <button type="submit" name="signup.btn" class="btn btm-primary btn-block btn-lg">Sign Up</button>
                 </div>
                 <p class="text-cemter">Already a member? <a href="login.php">Sign In</a></p>

                </form>    

            </div>
        </div>
    </div>
</body>
</html>