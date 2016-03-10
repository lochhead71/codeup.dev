<?php

require_once 'Log.php';

$sampleLog = new Log('cli');

$sampleLog->info("This is an info message.");

$sampleLog->error("This is an error message.");

?>