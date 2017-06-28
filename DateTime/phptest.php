<head>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
	<h1 id="Title">The Current Date an Time is</h1>
	<?php 
		ini_set("display_errors", on);
		$d=date("Y-m-d H:i:s");
		$s1='<h3 id="DateTime">';
		$s2='</h3>';
		echo $s1.$d.$s2;
	?>
</body>