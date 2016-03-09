<?php

class Log

{

	public $filename;

	public function logMessage($logLevel, $message)
		{
			$filename = "log-" . date('Y-m-d') . ".log";
			$handle = fopen($filename, 'a');
			$log = date('Y-m-d G:i:s') . "[" . $logLevel . "] " . $message . PHP_EOL;
			fwrite($handle, $log);
			fclose($handle);
		}

	public function info($message) {
		logMessage("INFO", $message);
	}

	public function error($message) {
		logMessage("ERROR", $message);
	}

}
