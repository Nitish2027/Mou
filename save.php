<?php

if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "Both Fields are required";
		break;
		}
	}

	if(!isset($error_message)) {
		require_once("connect.php");
		$db_handle = new DBConnect();
		$query = "INSERT INTO sample_tbl (field_1, field_2) VALUES
		('" . $_POST["input_1"] . "', '" . $_POST["input_2"] . "')";
		$result = $db_handle->insertQuery($query);
                
		if(!empty($result)) {
                        header("Location:success.php");
			$error_message = "";	
			unset($_POST);
                        exit;
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>

<?php if(!empty($error_message)) { ?>	
        <div><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>