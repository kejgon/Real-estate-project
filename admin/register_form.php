<?php include "dbconn.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->


</head>

<body>


    <div class="container">
        <div class="loginform">

            <h2>New Users</h2>

            <div class="row">
                <form class="col s12" method="post" action="">

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="username" class="form-control" placeholder="Username" value="" />

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="password" class="form-control" placeholder="Password" value="" />

                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <button class="waves-effect waves-light btn" type="submit" name="register">Register</button>


                        </div>
                        <div class="input-field col s6">
                            <a class="waves-effect waves-light btn" href="index.php">Login</a>



                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <?php

    if (isset($_POST['register'])) {

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($email) or empty($username) or empty($password)) {
            header("Location: register_form.php");
        } else {




            $query = "INSERT INTO users (email, username, password)";
            $query .= "VALUE('$email','$username','$password')";

            $create_users = mysqli_query($conn, $query);


            if (!$create_users) {
                die('QUERY FAILED' . mysqli_error($conn));
            } else {

                header("Location: congrat.php");
                // echo "
                // <h1> Congratulation! your account created successfully</h1>

                // ";
            }
        }
    }


    ?>



</body>

</html>