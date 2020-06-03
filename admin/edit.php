<?php
	if (isset($_GET['id'])) {
		$edit_id = $_GET['id'];
		// echo "set to ".$edit_id;
		//select all from details
		include 'dbconn.php';
		$sql = "SELECT * FROM users WHERE id = '$edit_id'";
		$results = $conn->query($sql);

		if ($results->num_rows > 0) {
		while ($row = $results->fetch_assoc()) {
		$db_id = $row['id'];
		$db_email = $row['email'];
		$db_username = $row['username'];
		$db_pass = $row['password'];
		}
	}
	// else{
	// 	echo "not set";
	}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="loginform">
        <h1>Update here</h1>
        <form method="post" action="edit.php">
            <div class="form-group">
                <input class="form-control" type="text" name="id" placeholder="Id" value="<?php global $db_id; echo $db_id;?>">
            </div>
                        <div class="form-group">

                            <input class="form-control" type="email" name="email" placeholder="Email" value="<?php global $db_email; echo $db_email;?>"></div> 
                        <div class="form-group">

                            <input class="form-control" type="text" name="username" placeholder="Username" value="<?php global $db_username; echo $db_username;?>"></div>
                        <div class="form-group">

                            <input class="form-control" type="password" name="password" placeholder="Password" value="<?php global $db_pass; echo $db_pass;?>"></div>
                        <div class="form-group">

                            <input class="form-control" type="submit" name="update" value="Update"></div>
        </form>
    </div>
</body>

</html>
<?php
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$em = $_POST['email'];
		$usr = $_POST['username'];
		$pwd = $_POST['password'];
		require_once 'dbconn.php';

		$sql = "UPDATE details SET email = '$em', username = '$usr', password = '$pwd' WHERE id = '$id'";

		if ($conn->query($sql) === TRUE) {
			header('Location: admin_page.php');
		}else{
			echo "Failed to update".$conn->error;
		}
	}
?>