<!doctype html>
<html>
	<head>
		<title>M.O.U.</title>

		<link rel="stylesheet" type="text/css" href="menu.css"/>
		<script type="application/javascript" src="menu.js"></script>

		<link rel="stylesheet" type="text/css" href="skin.css"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	  <script>

		$(function() {
	    $("#date_ex").datepicker();
	  });

		jQuery.fn.multiselect = function() {
    $(this).each(function() {
        var checkboxes = $(this).find("input:checkbox");
        checkboxes.each(function() {
            var checkbox = $(this);
            // Highlight pre-selected checkboxes
            if (checkbox.prop("checked"))
                checkbox.parent().addClass("multiselect-on");

            // Highlight checkboxes that the user selects
            checkbox.click(function() {
                if (checkbox.prop("checked"))
                    checkbox.parent().addClass("multiselect-on");
                else
                    checkbox.parent().removeClass("multiselect-on");
            });
        });
    });
};

$(function() {
     $(".multiselect").multiselect();
});



		$(document).ready(function(){

				$('#select_category').change(function(){
					 $(this).val() == "Other" ? $('#other_category').show() : $('#other_category').hide();
				});

				$('#select_validity').change(function(){
					 $(this).val() == "Other" ? $('#other_validity').show() : $('#other_validity').hide();
				});

				$('#select_nature').change(function(){
					 $(this).val() == "Other" ? $('#other_nature').show() : $('#other_nature').hide();
				});

				$('#nodal_dept').change(function(){
					 $(this).val() == "Other" ? $('#other_nodal_dept').show() : $('#other_nodal_dept').hide();
				});

				$('#advisor_dept').change(function(){
					 $(this).val() == "Other" ? $('#other_advisor_dept').show() : $('#other_advisor_dept').hide();
				});

				$('#supervisor_dept').change(function(){
					 $(this).val() == "Other" ? $('#other_supervisor_dept').show() : $('#other_supervisor_dept').hide();
				});


		});


	  </script>

	</head>

<body>
	<div class="Header">
	    <ul class="Menu -horizontal">
        <li><a href="#">Harry</a></li>
        <li><a href="#">Ron</a></li>
        <li><a href="#">Hermione</a></li>
        <li><a href="#">Draco</a></li>
		  </ul>
		  <ul class="Menu -horizontal -alignRight">
  			<li><a href="#">El</a></li>
  			<li><a href="#">Mike</a></li>
  			<li><a href="#">Dustin</a></li>
        <li><a href="#">Lucas</a></li>
		  </ul>
	</div>

	<div class="table_div">
		<form name="Register" method="post" action="save.php">
			<table>
				<tr>
					<td>M.O.U. Departments:</td>
					<td>
						 <div  class="multiselect">
						    <label><input type="checkbox" name="option[]" value="Chemical Engineering" />Chemical Engineering</label>
						    <label><input type="checkbox" name="option[]" value="Civil Engineering" />Civil Engineering</label>
						    <label><input type="checkbox" name="option[]" value="Computer and Communication Engineering" />Computer and Communication Engineering</label>
						    <label><input type="checkbox" name="option[]" value="Computer Science and Engineering" />Computer Science and Engineering</label>
						    <label><input type="checkbox" name="option[]" value="Information Technology" />Information Technology</label>
						    <label><input type="checkbox" name="option[]" value="Mechatronics Engineering" />Mechatronics Engineering</label>
						    <label><input type="checkbox" name="option[]" value="Automobile Engineering" />Automobile Engineering</label>
								<label><input type="checkbox" name="option[]" value="Mechanical Engineering" />Mechanical Engineering</label>
								<label><input type="checkbox" name="option[]" value="Electrical Engineering" />Electrical Engineering</label>
								<label><input type="checkbox" name="option[]" value="Electronics and Communication Engineering" />Electronics and Communication Engineering</label>
								<label><input type="checkbox" name="option[]" value="Business Administration" />Business Administration</label>
								<label><input type="checkbox" name="option[]" value="Commerce" />Commerce</label>
								<label><input type="checkbox" name="option[]" value="Hotel Management" />Hotel Management</label>
								<label><input type="checkbox" name="option[]" value="Business" />Business</label>
								<label><input type="checkbox" name="option1[]" value="BioScience" />BioScience</label>
								<label><input type="checkbox" name="option1[]" value="Chemistry" />Chemistry</label>
								<label><input type="checkbox" name="option1[]" value="Mathematics and Statistics" />Mathematics and Statistics</label>
								<label><input type="checkbox" name="option1[]" value="Physics" />Physics</label>
								<label><input type="checkbox" name="option1[]" value="Arts" />Arts</label>
								<label><input type="checkbox" name="option1[]" value="Economics" />Economics</label>
								<label><input type="checkbox" name="option1[]" value="Languages" />Languages</label>
								<label><input type="checkbox" name="option1[]" value="Psychology" />Psychology</label>
								<label><input type="checkbox" name="option1[]" value="Law" />Law</label>
								<label><input type="checkbox" name="option1[]" value="Journalism and Mass Communication" />Journalism and Mass Communication</label>
								<label><input type="checkbox" name="option1[]" value="Environment" />Environment</label>
								<label><input type="checkbox" name="option1[]" value="Architecture and Design" />Architecture and Design</label>
								<label><input type="checkbox" name="option1[]" value="Fashion Design" />Fashion Design</label>
								<label><input type="checkbox" name="option1[]" value="Interior Design" />Interior Design</label>
								<label><input type="checkbox" name="option1[]" value="Planning" />Planning</label>
								<label><input type="checkbox" name="option1[]" value="Fine Arts" />Fine Arts</label>
						</div>
			   </td>
				</tr>

				<tr>
						<td>University/Institution Name: </td>
						<td><input type="text" name="university_name"/></td>
				</tr>

				<tr>
					<td>Category: </td>
					<td>
						<select id="select_category" name="category">
							<option value="" selected >Select</option>
          		<option value="International">International</option>
							<option value="National">National</option>
							<option value="Industry">Industry</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_category" class="hiddenField" id="other_category" />
					</td>
				</tr>
				<tr>
					<td>Date of Signing: </td>
					<td><input name="date" type="text" id="date_ex" readonly></td>
				</tr>
				<tr>
					<td>Validity: </td>
					<td>
						<select id="select_validity" name="validity">
							<option value="" selected >Select</option>
							<option value="1_Year">1 Year</option>
							<option value="2_Years">2 Years</option>
							<option value="3_Years">3 Years</option>
							<option value="4_Years">4 Years</option>
							<option value="5_Years">5 Years</option>
							<option value="Lifetime">Lifetime</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_nature" class="hiddenField" id="other_validity" />
					</td>
				</tr>
				<tr>
					<td>MOU meant for: </td>
					<td>
						<select name="meant_for">
							<option value="" selected >Select</option>
							<option value="Student">Student</option>
							<option value="Faculty">Faculty</option>
							<option value="Researcher">Researcher</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nature of MOU: </td>
					<td>
						<select id="select_nature" name="nature">
							<option value="" selected >Select</option>
							<option value="Student_exchange">Student Exchange</option>
							<option value="Study_abroad">Study Abroad</option>
							<option value="Sem_exchange">Sem Exchange</option>
							<option value="Short_visit">Short Visit</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_nature" class="hiddenField" id="other_nature" />
					</td>
				</tr>
				<tr>
					<td>Brief Description: </td>
					<td>
						<textarea name="brief" rows="5" cols="47">
						</textarea>
					</td>
				</tr>
				<tr>
					<td>Status: </td>
					<td>
						<input type="radio" name="status" value="Active">Active
						<input type="radio" name="status" value="Inactive">Inactive
						<input type="radio" name="status" value="Something">Something
						<input type="radio" name="status" value="Other">Other
					</td>
				</tr>
				<tr>
					<td>Exchange Requirement: </td>
					<td>
						<select name="exchange">
							<option value="" selected >Select</option>
							<option value="Something1">Something1</option>
							<option value="Something2">Something2</option>
							<option value="Something3">Something3</option>
							<option value="Something4">Something4</option>
							<option value="Something5">Something5</option>
						</select>
					</td>
				</tr>
				<tr class="noborder">
						<td colspan="2" class="noborder"><hr></td>
				</tr>
				<tr class="noborder">
						<td colspan="2" class="noborder"><h3 align="center">Nodal Officer</h3></td>
				</tr>
				<tr>
						<td>Name: </td>
						<td><input type="text" name="nodal_name"/></td>
				</tr>
				<tr>
						<td>Email: </td>
						<td><input type="text" name="nodal_email"/></td>
				</tr>
				<tr>
						<td>Contact Number: </td>
						<td><input type="text" name="nodal_cnumber"/></td>
				</tr>

				<tr>
					<td>Department: </td>
					<td>
						<select id="nodal_dept" name="nodal_dept">
							<option value="" selected >Select</option>
							<option value="International">International</option>
							<option value="National">National</option>
							<option value="Industry">Industry</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_nodal_dept" class="hiddenField" id="other_nodal_dept" />
					</td>
				</tr>

				<tr class="noborder">
						<td colspan="2" class="noborder"><hr></td>
				</tr>

				<tr class="noborder">
						<td colspan="2" class="noborder"><h3 align="center">Advisor</h3></td>
				</tr>
				<tr>
						<td>Name: </td>
						<td><input type="text" name="advisor_name"/></td>
				</tr>
				<tr>
						<td>Email: </td>
						<td><input type="text" name="advisor_email"/></td>
				</tr>
				<tr>
						<td>Contact Number: </td>
						<td><input type="text" name="advisor_cnumber"/></td>
				</tr>

				<tr>
					<td>Department: </td>
					<td>
						<select id="advisor_dept" name="advisor_dept">
							<option value="" selected >Select</option>
							<option value="International">International</option>
							<option value="National">National</option>
							<option value="Industry">Industry</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_advisor_dept"  class="hiddenField" id="other_advisor_dept" />
					</td>
				</tr>


				<tr class="noborder">
						<td colspan="2" class="noborder"><hr></td>
				</tr>


				<tr class="noborder">
						<td colspan="2" class="noborder"><h3 align="center">Supervisor</h3></td>
				</tr>
				<tr>
						<td>Name: </td>
						<td><input type="text" name="supervisor_name"/></td>
				</tr>
				<tr>
						<td>Email: </td>
						<td><input type="text" name="supervisor_email"/></td>
				</tr>
				<tr>
						<td>Contact Number: </td>
						<td><input type="text" name="supervisor_cnumber"/></td>
				</tr>

				<tr>
					<td>Department: </td>
					<td>
						<select id="supervisor_dept" name="supervisor_dept">
							<option value="" selected >Select</option>
							<option value="International">International</option>
							<option value="National">National</option>
							<option value="Industry">Industry</option>
							<option value="Other">Other</option>
						</select>
						<input type="text" name="other_supervisor_dept" class="hiddenField" id="other_supervisor_dept" />
					</td>
				</tr>

				<tr>
					<td class="noborder" align="center" style="padding:10px">
						<input style="float:left" class="button" type="submit" formaction="save.php" name="register_mou" value="Submit">
					</td>
					<td class="noborder" align="center" style="padding:10px">
						<input style="float:right" class="button" type="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<!--<div id="footer" align="center">
		Manipal University Jaipur. All rights reserved.
	</div> -->
</body>
</html>
