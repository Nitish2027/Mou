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

		$checkBox = implode(',', $_POST['option']);

		$category = $_POST["category"] ;
		if($category=="Other"){
			$category = $_POST["other_category"];
		}

		$validity = $_POST["validity"] ;
		if($validity=="Other"){
			$validity = $_POST["other_validity"];
		}

		$nature = $_POST["nature"] ;
		if($nature=="Other"){
			$nature = $_POST["other_nature"];
		}

		$nodal_dept = $_POST["nodal_dept"] ;
		if($nodal_dept=="Other"){
			$nodal_dept = $_POST["other_nodal_dept"];
		}

		$advisor_dept = $_POST["advisor_dept"] ;
		if($advisor_dept=="Other"){
			$advisor_dept = $_POST["other_advisor_dept"];
		}

		$supervisor_dept = $_POST["supervisor_dept"] ;
		if($supervisor_dept=="Other"){
			$supervisor_dept = $_POST["other_supervisor_dept"];
		}


					$query = "INSERT INTO main_table(mou_dept, category, date, validity, meant_for, nature, description, status, exchange, nodal_name, nodal_email, nodal_cnumber, nodal_dept, advisor_name, advisor_email, advisor_cnumber, advisor_dept, supervisor_name,supervisor_email, supervisor_cnumber, supervisor_dept) VALUES
					('" . $checkBox . "', '" . $category . "', '" . $_POST["date"] . "', '" . $validity . "', '" . $_POST["meant_for"] . "', '" . $nature. "', '" . $_POST["brief"] . "', '" . $_POST["status"] . "', '" . $_POST["exchange"] . "', '" . $_POST["nodal_name"] . "', '" . $_POST["nodal_email"] . "', '" . $_POST["nodal_cnumber"] . "', '" . $nodal_dept. "',  '" . $_POST["advisor_name"] . "', '" . $_POST["advisor_email"] . "', '" . $_POST["advisor_cnumber"] . "', '" . $advisor_dept . "', '" . $_POST["supervisor_name"] . "', '" . $_POST["supervisor_email"] . "', '" . $_POST["supervisor_cnumber"] . "', '" . $supervisor_dept . "' )";
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
