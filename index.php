<!doctype html>
<html>
	<head>
		<title>M.O.U.</title>

		<link rel="stylesheet" type="text/css" href="menu.css"/>
		<script type="application/javascript" src="menu.js"></script>

		<link rel="stylesheet" type="text/css" href="skin.css"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>


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
	        <li class="-hasSubmenu">
						<a href="#">Engineering</a>
							<ul>
								<li class="-hasSubmenu">
									<a href="#">Engineering 1</a>
										<ul>
											<li><a class="clickable" href="#">Engineering 1-1</a></li>
											<li><a class="clickable" href="#">Engineering 1-2</a></li>
											<li><a class="clickable" href="#">Engineering 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Engineering 2</a>
										<ul>
											<li><a class="clickable" href="#">Engineering 2-1</a></li>
											<li><a class="clickable" href="#">Engineering 2-2</a></li>
											<li><a class="clickable" href="#">Engineering 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Engineering 3</a>
										<ul>
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
								<li class="-hasSubmenu">
									<a href="#">Management 1</a>
										<ul>
											<li><a class="clickable" href="#">Management 1-1</a></li>
											<li><a class="clickable" href="#">Management 1-2</a></li>
											<li><a class="clickable" href="#">Management 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Management 2</a>
										<ul>
											<li><a class="clickable" href="#">Management 2-1</a></li>
											<li><a class="clickable" href="#">Management 2-2</a></li>
											<li><a class="clickable" href="#">Management 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Management 3</a>
										<ul>
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
								<li class="-hasSubmenu">
									<a href="#">Science 1</a>
										<ul>
											<li><a class="clickable" href="#">Science 1-1</a></li>
											<li><a class="clickable" href="#">Science 1-2</a></li>
											<li><a class="clickable" href="#">Science 1-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Science 2</a>
										<ul>
											<li><a class="clickable" href="#">Science 2-1</a></li>
											<li><a class="clickable" href="#">Science 2-2</a></li>
											<li><a class="clickable" href="#">Science 2-3</a></li>
										</ul>
								</li>
								<li class="-hasSubmenu">
									<a href="#">Science 3</a>
										<ul>
											<li><a class="clickable" href="#">Science 3-1</a></li>
											<li><a class="clickable" href="#">Science 3-2</a></li>
											<li><a class="clickable" href="#">Science 3-3</a></li>
										</ul>
								</li>
							</ul>
					</li>
    </ul>
	</div>
	<div align="center">
		<form name="Register" method="post" action="save.php">
			<table border="2x solid black">
				<tr>
					<td>You have choosen: </td>
					<td><input id="textbox" readonly> </td>
				</tr>
			</table>
		</form>

	</div>
</body>
</html>
