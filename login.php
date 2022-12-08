<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index2.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Rai Photography Website</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="assets/css/main1.css" rel="stylesheet">


</head>

<body>



        <section class="h-100 gradient-form" style="background-color: #eee;">

                <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-xl-10">
                                        <div class="card rounded-3 text-white"  style="background-color: rgb(94, 94, 94);">
                                                <div class="row g-0">
                                                        <div class="col-lg-6">
                                                                <div class="card-body p-md-5 mx-md-4">
                                                                <form action="" method="post" name="Login_Form">
                                                                        <div class="text-center">
                                                                                <img src="assets/img/logo.png"
                                                                                        style="width: 185px;"
                                                                                        alt="logo">
                                                                                        
                                                                                <h4 class="mt-1 mb-5 pb-1">Hi Raina, Welcome Back!</h4>
                                                                        </div>

                                                                        <form>
                                                                                <p>Please login to your admin account</p>
                                                                                <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <br>
    <br>
                                                                                <div class="form-outline mb-4">
                                                                                        <input type="text"
                                                                                                name="Username"
                                                                                                id="form2Example11"
                                                                                                class="form-control"
                                                                                                placeholder="username" />
                                                                                        <label class="form-label"
                                                                                                for="form2Example11">Username</label>
                                                                                </div>

                                                                                <div class="form-outline mb-4">
                                                                                        <input type="password"
                                                                                                name="Password"
                                                                                                id="form2Example22"
                                                                                                class="form-control"  placeholder="password"/>
                                                                                        <label class="form-label"
                                                                                                for="form2Example22">Password</label>
                                                                                </div>

                                                                                <div class="text-center pt-1 mb-5 pb-1">
                                                                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                                                                name="Submit"
                                                                                                type="submit" value="Login">Log
                                                                                                in</button>
                                                                                                <br>
                                                                                        <a class="text-white"
                                                                                                href="#!">Forgot
                                                                                                password?</a>
                                                                                </div>

                                                                                

                                                                        </form>

                                                                </div>
                                                        </div>
                                                        <div
                                                                class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                                                        <h4 class="mb-4">Raina V. Gemanel
                                                                        </h4>
                                                                        <p class="small mb-0">An administrator is someone who has the authority to make modifications to a program that will impact other users. Administrators can modify the design, content, and security options.</p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
</body>

</html>