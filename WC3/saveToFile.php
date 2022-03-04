<?php

	function saveToFile($filename, $data) {
		//  Open/create file
		$myFile = fopen("$filename", 'a');
		// Write to file
		fwrite($myFile,"\n"); // Start new line
		foreach($data as $key => $value) {
			fwrite($myFile, "$key: $value\n");
		}
		// Close file
		fclose($myFile);
	}

?>