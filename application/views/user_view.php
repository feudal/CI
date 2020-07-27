<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User View</title>
</head>
<body>


<?php

//echo $result;

		foreach ($result as $object) {
			echo $object->username.'<br>';
		}

?>

</body>
</html>