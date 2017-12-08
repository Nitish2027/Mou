<?php

// if(!empty($_POST["register-user"])) {
// 	/* Form Required Field Validation */
// 	foreach($_POST as $key=>$value) {
// 		if(empty($_POST[$key])) {
// 		$error_message = "Both Fields are required";
// 		break;
// 		}
// 	}
//
// 	if(!isset($error_message)) {
		require_once("connect.php");
		$db_handle = new DBConnect();
		$query = "INSERT INTO main_table(mou_dept, category, date, validity, meant_for, nature, description, status, exchange, nodal_name, nodal_email, nodal_cnumber, advisor_name, advisor_email, advisor_cnumber, supervisor_name,supervisor_email, supervisor_cnumber) VALUES
		('" . $_POST["dept"] . "', '" . $_POST["category"] . "', '" . $_POST["date"] . "', '" . $_POST["validity"] . "', '" . $_POST["meant_for"] . "', '" . $_POST["nature"] . "', '" . $_POST["brief"] . "', '" . $_POST["status"] . "', '" . $_POST["exchange"] . "', '" . $_POST["nodal_name"] . "', '" . $_POST["nodal_email"] . "', '" . $_POST["nodal_cnumber"] . "', '" . $_POST["advisor_name"] . "', '" . $_POST["advisor_email"] . "', '" . $_POST["advisor_cnumber"] . "', '" . $_POST["supervisor_name"] . "', '" . $_POST["supervisor_email"] . "', '" . $_POST["supervisor_cnumber"] . "')";
		$result = $db_handle->insertQuery($query);

		// $query = "INSERT INTO main_table(category,date) VALUES
		// ('" . $_POST["category"] . "', '" . $_POST["date"] . "')";

		if(!empty($result)) {
                        header("Location:success.php");
			$error_message = "";
			unset($_POST);
                        exit;
		} else {
			$error_message = "Problem in registration. Try Again!";
		}
// 	}
// }
?>

<?php if(!empty($error_message)) { ?>
        <div><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
