<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log overview</title>
</head>
<body>
    <header><a href="index.php">Index</a></header>
	<?php
		$myFile = fopen("logfile.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
		while(!feof($myFile)) {
			echo fgets($myFile);
			echo "<br>";
		}
		fclose($myFile);
	?>
</body>
</html>
