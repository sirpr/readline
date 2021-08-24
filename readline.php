<?php

function read_line($prompt = '') {
	$result = false;
	if (php_sapi_name() === "cli") {
		fwrite(STDOUT, $prompt);
		$result = fgets(STDIN);
	}
	return $result;
}