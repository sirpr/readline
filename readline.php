<?php

function read_line($prompt = '') {
	$result = false;
	if (php_sapi_name() === "cli") {
		if(function_exists("readline")) // we use readline php extention if is availble for using
			$result = readline($prompt);
		else {
			echo $prompt;
			$result = fgets(STDIN);
		}
		
	}
	return $result;
}