<?php
	if (isset($_GET['id'])) {
		$delete_id = $_GET['id'];
		// echo "set to ".$edit_id;
		//select all from details
		include 'dbconn.php';
		$sql = "DELETE FROM users WHERE id='$delete_id'";
		if ($conn->query($sql) == TRUE) {
			header('Location: admin_page.php');
		}else{
			echo "Failed to delete".$conn->error;
		}
	}
?>