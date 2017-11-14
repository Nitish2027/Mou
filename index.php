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
									<a href="#">Engineering 1</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Engineering 1-1</a></li>
											<li><a class="clickable" href="#">Engineering 1-2</a></li>
											<li><a class="clickable" href="#">Engineering 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Engineering 2</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Engineering 2-1</a></li>
											<li><a class="clickable" href="#">Engineering 2-2</a></li>
											<li><a class="clickable" href="#">Engineering 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Engineering 3</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Engineering 3-1</a></li>
											<li><a class="clickable" href="#">Engineering 3-2</a></li>
											<li><a class="clickable" href="#">Engineering 3-3</a></li>
										</ul>
								</li>
							</ul>
					</li>
					<li class="-hasSubmenu">
						<a href="#">Management</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">Management 1</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Management 1-1</a></li>
											<li><a class="clickable" href="#">Management 1-2</a></li>
											<li><a class="clickable" href="#">Management 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Management 2</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Management 2-1</a></li>
											<li><a class="clickable" href="#">Management 2-2</a></li>
											<li><a class="clickable" href="#">Management 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Management 3</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Management 3-1</a></li>
											<li><a class="clickable" href="#">Management 3-2</a></li>
											<li><a class="clickable" href="#">Management 3-3</a></li>
										</ul>
								</li>
							</ul>
					</li>
					<li class="-hasSubmenu">
						<a href="#">Science</a>
							<ul>
								<li class="category">School</li>
								<li class="-hasSubmenu">
									<a href="#">Science 1</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Science 1-1</a></li>
											<li><a class="clickable" href="#">Science 1-2</a></li>
											<li><a class="clickable" href="#">Science 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Science 2</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Science 2-1</a></li>
											<li><a class="clickable" href="#">Science 2-2</a></li>
											<li><a class="clickable" href="#">Science 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Science 3</a>
										<ul>
											<li class="category">Department</li>
											<li><a class="clickable" href="#">Science 3-1</a></li>
											<li><a class="clickable" href="#">Science 3-2</a></li>
											<li><a class="clickable" href="#">Science 3-3</a></li>
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
					<td><input id="textbox" readonly> </td>
				</tr>
				<tr>
					<td>Category: </td>
					<td>
						<select name="category">
							<option value="" selected >Select</option>
          		<option value="International">International</option>
							<option value="National">National</option>
							<option value="Industry">Industry</option>
							<option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date of Signing: </td>
					<td><input type="text" id="date_ex" readonly></td>
				</tr>
				<tr>
					<td>Validity: </td>
					<td>
						<select name="validity">
							<option value="" selected >Select</option>
							<option value="1_Year">1 Year</option>
							<option value="2_Years">2 Years</option>
							<option value="3_Years">3 Years</option>
							<option value="4_Years">4 Years</option>
							<option value="5_Years">5 Years</option>
							<option value="Lifetime">Lifetime</option>
							<option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>MOU meant for: </td>
					<td>
						<select name="MOU_meant_for">
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
						<select name="Nature_of_MOU">
							<option value="" selected >Select</option>
							<option value="Student_exchange">Student Exchange</option>
							<option value="Study_abroad">Study Abroad</option>
							<option value="Sem_exchange">Sem Exchange</option>
							<option value="Short_visit">Short Visit</option>
							<option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Brief Description: </td>
					<td>
						<textarea rows="5" cols="40">
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
						<select name="Exchange_requirement">
							<option value="" selected >Select</option>
							<option value="Something1">Something1</option>
							<option value="Something2">Something2</option>
							<option value="Something3">Something3</option>
							<option value="Something4">Something4</option>
							<option value="Something5">Something5</option>
						</select>
					</td>
				</tr>
			</table>
		</form>

	</div>
</body>
</html>
