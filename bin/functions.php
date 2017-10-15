<?php

function doThings() {
	
	echo "A " . getLineFromFile('testroles') . " " .  lcfirst(trim(getLineFromFile('verbs'))) . " into a " . getLineFromFile('stores') . " and orders a " . trim(getLineFromFile('nouns')) . ".";
	
}


function getLineFromFile($source) {
	
	$file_contents = file("lists/" . $source . ".txt");
	
	$selection = rand(0, count($file_contents) - 1);
	
	return $file_contents[$selection];


	
}

?>