<?php
session_start();
?>
<?php include "dbconn.php" ?>



<!----------------------Adding properties---------------------------->

<?php

if (isset($_GET['update_prop'])) {
    $id = $_GET['update_prop'];

    $query = "SELECT * FROM properties Where prop_id = '$id'";
    $selecting_all_prop = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($selec_all_posts)) {

        $post_id = $row['prop_id'];
        $prop_title =  $row['prop_title'];
        $prop_owner =  $row['prop_owner'];
        $prop_type =  $row['prop_type'];
        $address =  $row['address'];
        $post_img = $row['prop_img'];
        $sold =  $row['sold'];
        $bedroom =  $row['bedroom'];
        $kitchen =  $row['kitchen'];
        $balcony =  $row['balcony'];
        $swimming_pool =  $row['swimming_pool'];
        $bathroom =  $row['bathroom'];
        $price =  $row['price'];
    }
}

if (isset($_POST['update_prop'])) {

    $target = "img/" . basename($_FILES['image']['name']); // the path to store the uploaded images

    $prop_title = $_POST['prop_title'];
    $prop_owner = $_POST['prop_owner'];
    $prop_type = $_POST['prop_type'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $prop_img = $_FILES['image']['name'];
    $sold = $_POST['sold'];
    $bedroom = $_POST['bedroom'];
    $kitchen = $_POST['kitchen'];
    $balcony = $_POST['balcony'];
    $swimming_pool = $_POST['swimming_pool'];
    $bathroom = $_POST['bathroom'];
    $price = $_POST['price'];





    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $query = "UPDATE properties SET (prop_title,prop_owner,prop_type,address,description,prop_img,sold,bedroom,kitchen,balcony,bathroom,swimming_pool,price)";
    $query .= "VALUE('$prop_title','$prop_owner','$prop_type','$address','$description','$prop_img','$sold', $bedroom,$kitchen,$balcony,$bathroom,'$swimming_pool','$price')";



    $adding_property = mysqli_query($conn, $query);


    if (!$adding_property) {
        die('QUERY FAILED' . mysqli_error($conn));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin Cpanel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                <li class="dropdown">


                    <?php
                    $user = $_SESSION['user'];

                    ?>

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-bar-home-o"></i>Visit Main Site</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <a href="admin_users.php">Admin Users</a>
                            </li>
                            <li>
                                <a href="#">Customers</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#properties"><i class="fa fa-fw fa-arrows-v"></i> Properties <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="properties" class="collapse">
                            <li>
                                <a href="view_property.php">View All Properties</a>
                            </li>
                            <li>
                                <a href="addproperty.php">Add New Properties</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update Property

                        </h1>

                        <!-------------------------------Adding Properties-------------------------------->
                        <form method="post" enctype="multipart/form-data">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" value="<?php echo $prop_title; ?>" name="prop_title" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="prop_owner" value="<?php echo $prop_owner; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="prop_type" value="<?php echo $prop_type; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="address" value="<?php echo $address; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea required name="description" value="<?php echo $description; ?>" class="form-control"></textarea>
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">


                                    <div class="custom-file">
                                        <label class="form-label">Add Property Image</label>
                                        <input required name="image" value="<?php echo $prop_img; ?>" type="file" multiple />

                                    </div>


                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label style="color:gray;">Sold</label>

                                            <input name="sold" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" checked />
                                            <label for="radio_36">YES</label>

                                            <input name="sold" type="radio" id="radio_30" value="No" class="with-gap radio-col-red" />
                                            <label for="radio_30">NO</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="number" name="bedroom" value="<?php echo $bedroom ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="number" name="kitchen" value="<?php echo $kitchen; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="number" name="balcony" value="<?php echo $balcony; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label style="color:gray;">Swimming Pool</label>

                                            <input name="swimming_pool" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" checked />
                                            <label for="radio_36">YES</label>

                                            <input name="swimming_pool" type="radio" id="radio_30" value="No" class="with-gap radio-col-red" />
                                            <label for="radio_30">NO</label>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="bathroom" value="<?php echo $bathroom; ?>" class="form-control">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" value="<?php echo $price; ?>" required name="price">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">


                                    <input type="submit" name="update_prop" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                </div>
                            </div>
                        </form>





                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>