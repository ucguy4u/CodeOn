<?php

?>
<html>
	<head>
		<title>Online Compiler for Off-Campus Students</title>
	</head>

	<body>
	<div id="whole">
		<div id="content">
			<table class="code">
				<td class="code">	
				<form action="compile.php" method="post" id="form">
					Select Language of Interest:
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="glib">Graphics</option>
							<option value="nvcc">NVCC</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
							
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>
					<textarea name="code" rows=15 cols=100 onkeydown=insertTab(this,event) id="code"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<strong>Sample Input please:<br/></strong>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input type="submit" va	lue="Submit" id="submit">
					<input type="reset" value="Reset"><br/>
				</form>
				</td>
		</div>

	</div>
	
	</body>
</html>
