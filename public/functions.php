<?php

function inputHas($key) {
	return isset($_REQUEST[$key]);
}

function escape($input) {
	$result = htmlspecialchars(strip_tags($input));
	return $result;
}

function inputGet($key) {
	$result = inputHas($key) ? $_REQUEST[$key] : NULL;
	return $result;
}