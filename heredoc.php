<?php 
	$name = "azhar";
	$address = "feni";
	$profession = "teacher";
echo <<<END
<!DOCTYPE html>
<html>
<head>
	<title>Heredoc</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Address</td>
			<td>Profession</td>
		</tr>
		<tr>
			<td>$name</td>
			<td>$address</td>
			<td>$profession</td>
		</tr>
	</table>

</body>
</html>

END;