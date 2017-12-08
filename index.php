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

		$(document).ready(function(){
				$("a.clickable").click(function(event){
						event.preventDefault();
						$("input#textbox").val($(this).html());
						$('.table_div').slideToggle();
						$('html, body').animate({
				        scrollTop: 600
				    }, 2000);
				});

				$('#select_category').change(function(){
					 $(this).val() == "Other" ? $('#other_category').show() : $('#other_category').hide();
				});

				$('#select_validity').change(function(){
					 $(this).val() == "Other" ? $('#other_validity').show() : $('#other_validity').hide();
				});

				$('#select_nature').change(function(){
					 $(this).val() == "Other" ? $('#other_nature').show() : $('#other_nature').hide();
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
	<div class="Content">
	    <h2>Select Here:</h2>
	    <ul class="Menu -vertical">
					<li class="category">Faculty</li>
	        <li class="-hasSubmenu">
						<a href="#">Engineering</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">School of Civil & Chemical Engineering</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Chemical Engineering</a></li>
											<li><a class="clickable" href="#">Civil Engineering</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">School of Computer Science & Information Technology</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Computer & Communication Engineering</a></li>
											<li><a class="clickable" href="#">Computer Science & Engineering </a></li>
											<li><a class="clickable" href="#">Information Technology </a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">School of Automobile, Mechanical & Mechatronics Engineering </a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Mechatronics Engineering </a></li>
											<li><a class="clickable" href="#">Automobile Engineering </a></li>
											<li><a class="clickable" href="#">Mechanical Engineering </a></li>
										</ul>
								</li>
                <li class="-hasSubmenu">
									<a href="#">School of Electrical, Electronics & Communication Engineering </a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Electrical Engineering </a></li>
											<li><a class="clickable" href="#">Electronics & Communication Engineering </a></li>
										</ul>
								</li>
							</ul>
					</li>
					<li class="-hasSubmenu">
						<a href="#">Management & Commerce</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">School of Business & Commerce</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Business Administration</a></li>
											<li><a class="clickable" href="#">Commerce</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">School of Hotel Management</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Hotel Management</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">TAPMI School of Business</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Business</a></li>
										</ul>
								</li>
							</ul>
					</li>
					<li class="-hasSubmenu">
						<a href="#">Science</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">School of Basic Sciences</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">BioScience</a></li>
											<li><a class="clickable" href="#">Chemistry</a></li>
											<li><a class="clickable" href="#">Mathematics & Statistics</a></li>
                      <li><a class="clickable" href="#">Physics</a></li>
										</ul>
								</li>
							</ul>
					</li>
          <li class="-hasSubmenu">
						<a href="#">Arts & Law</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">School of Humanities & Social Sciences</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Arts</a></li>
											<li><a class="clickable" href="#">Economics</a></li>
											<li><a class="clickable" href="#">Languages</a></li>
                      <li><a class="clickable" href="#">Psychology</a></li>
										</ul>
								</li>
                <li class="-hasSubmenu">
									<a href="#">School of Law</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Law</a></li>
										</ul>
								</li>
                <li class="-hasSubmenu">
									<a href="#">School of Media & Communication</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Journalism & Mass Communication</a></li>
										</ul>
								</li>

							</ul>
					</li>
          <li class="-hasSubmenu">
						<a href="#">Design</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">Centre for Built Environment</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Environment</a></li>
										</ul>
								</li>
                <li class="-hasSubmenu">
									<a href="#">School of Architecture & Design</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Architecture & Design</a></li>
										</ul>
								</li>
                <li class="-hasSubmenu">
									<a href="#">School of Planning & Design</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Fashion Design</a></li>
											<li><a class="clickable" href="#">Fine Arts</a></li>
											<li><a class="clickable" href="#">Interior Design</a></li>
                      <li><a class="clickable" href="#">Planning</a></li>
										</ul>
								</li>
							</ul>
					</li>
    </ul>
	</div>


	<div class="table_div">
		<form name="Register" method="post" action="save.php">
			<table>
				<tr>
					<td>Chosen Department: </td>
					<td><input name="dept" id="textbox" readonly> </td>
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
						<input type="text" class="hiddenField" id="other_category" />
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
						<input type="text" class="hiddenField" id="other_validity" />
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
						<input type="text" class="hiddenField" id="other_nature" />
					</td>
				</tr>
				<tr>
					<td>Brief Description: </td>
					<td>
						<textarea name="brief" rows="5" cols="40">
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
					<td><input name="dept" id="textbox" readonly> </td>
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
					<td><input name="dept" id="textbox" readonly> </td>
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
					<td><input name="dept" id="textbox" readonly> </td>
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
