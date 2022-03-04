<?php
	include_once 'Log.php';
	include_once 'saveToFile.php';

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		//  Create new log instance
		$log = new Log("S", "User is successfully saved");

		//  Save data to file
		$data = ["Name" => $_POST['name'], "E-mail" => $_POST['email'], "Favorite food" => $_POST['food'], "Saved at" => $log->date, "Type" => $log->type];
		saveToFile("logfile.txt", $data);

		?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Registered</title>
        </head>
        <body>
            <h1>Registration successful!</h1>
            <p><?php echo $log->print(); ?></p>
        </body>
        </html>
		<?php
	} else {
		header("location:index.php");
	}
?>

