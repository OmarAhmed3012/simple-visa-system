<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,900">
    </head>


    <body>




        <div class="path">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <div class="container">
                        <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </div>
                </ol>   
            </nav>
        </div>


        <!-- Login Content -->

        <div class="login" >
            <div class="container">
                <div class="login-heading text-uppercase">
                    <h3 class="text-center">Login Now</h3>
                </div>
                <form method="POST" action="../login.php">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">write your email</label>
                                <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPass">write your password</label>
                                <input type="password" class="form-control" name="Password" id="exampleInputPass" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




        




        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
