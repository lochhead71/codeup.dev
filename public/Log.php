<?php

class Log

{

	private $filename;
	private $handle;
	private $date;

	public function __construct($prefix = 'log')
	{
		$this->date = date('Y-m-d')
		$this->setFilename($prefix . "-" . $this->date . ".log");
		$this->handle = fopen($this->filename, 'a');
	}

	protected function setFilename($string)
	{
    	if (is_string($string))
    	{
    		echo "Your prefix is not valid; you provided " . gettype($sring)".";
    	} 
    	else if (touch($this->filename) && is_writable($this->filename))
		{
	    	$this->filename = trim($string);
		} 
		else
		{
			echo "You do not have privelages for that file."
		}
	}

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

	public function displayFilename()
	{
		echo $this->filename . PHP_EOL;
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

}

?>