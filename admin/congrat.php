<?php include "dbconn.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>



    <div class="container">
        <div class="loginform">

            <h2 style="text-align: center; color: rgb(218, 80, 192); padding:10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.26);">Welcome!!!</h2>


            <div class="row">
                <div class="input-field col s12">

                    <?php

                    echo "
                <h1> Congratulation! your account is created successfully</h1>
                
                ";
                    ?>
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;YOU CAN LOGIN NOW &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &rArr; &nbsp;&nbsp;&nbsp; <a class="waves-effect waves-light btn" href="index.php">Login</a>

                </div>
            </div>
        </div>



    </div>



</body>

</html>