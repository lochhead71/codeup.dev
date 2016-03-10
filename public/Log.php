<?php

class Log

{

	public $filename;
	public $handle;

	public function logMessage($logLevel, $message)
	{
		$log = date('Y-m-d G:i:s') . "[" . $logLevel . "] " . $message . PHP_EOL;
		fwrite($this->handle, $log);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

	
	public function __construct($prefix)
	{
		if ($prefix == '')
		{
			$prefix = 'log';
		}
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

}

?>