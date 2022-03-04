<?php

	function saveToFile($filename, $data) {
		//  Open/create file
		$myFile = fopen("$filename", 'a');
		// Write to file
		foreach($data as $key => $value) {
			fwrite($myFile, "\n$key: $value");
		}
		// Close file
		fclose($myFile);
	}

?>