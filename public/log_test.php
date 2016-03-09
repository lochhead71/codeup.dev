<?php

require_once 'Log.php';

$sampleLog = new Log();

$sampleLog->filename = "log-" . date('Y-m-d') . ".log";

$sampleLog->logMessage("INFO", "This is an info message.");

$sampleLog->info("This is an info message.");

$sampleLog->error("This is an error message.");

?>