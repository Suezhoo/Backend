<?php

	class Log {
		const TYPES = ["S" => "Success", "W" => "Warning", "E" => "Error"];
		var $date;
		var $time;
		var $text;
		var $type;

		function __construct($type, $text) {
			$this->date = date("d/m/y-H:i:s");
			$this->time = time();
			$this->type = self::TYPES["$type"];
			$this->text = $text;
		}

		function print() {
			return "$this->date - $this->type - $this->text\n";
		}
	}

?>