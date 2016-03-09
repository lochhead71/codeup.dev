<?php

class Log

{

	public $filename;

	public function logMessage($logLevel, $message)
	{
		$handle = fopen($this->filename, 'a');
		$log = date('Y-m-d G:i:s') . "[" . $logLevel . "] " . $message . PHP_EOL;
		fwrite($handle, $log);
		fclose($handle);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

}

?>