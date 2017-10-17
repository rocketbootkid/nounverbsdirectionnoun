<?php

function doThings() {
	
	$text = "";
	$objPlural = new Inflect();
		
	// Determine if one or several
	$one_or_many_testers = rand(0, 1);
	
	if ($one_or_many_testers == 0) { // One
		$text = $text . "A ";	
	} else { // Several
		$text = $text .  ucfirst(getLineFromFile('textamounts')) . " ";
	}
	
	$role = getLineFromFile('testroles');
	if ($one_or_many_testers == 1) {
		$role = $objPlural->pluralize($role);
	}
	
	$movement_verb = lcfirst(getLineFromFile('verbs'));
	if ($one_or_many_testers == 1) {
		$movement_verb = $objPlural->singularize($movement_verb);
	}
	
	$acquire_verb = getLineFromFile('acquireverbs');
	if ($one_or_many_testers == 1) {
		$acquire_verb = $objPlural->singularize($acquire_verb);
	}
	
	$text = $text . $role . " " . $movement_verb . " " . lcfirst(getLineFromFile('direction')) . " a " . getLineFromFile('stores') . " and " . $acquire_verb;

	$one_or_many_things = rand(0, 1);
	
	$final_noun = getLineFromFile('nouns');
	
	if ($one_or_many_things == 0) { // One
		if (substr($final_noun, 0, 1) == "a" || substr($final_noun, 0, 1) == "e" || substr($final_noun, 0, 1) == "i" || substr($final_noun, 0, 1) == "o" || substr($final_noun, 0, 1) == "u") {
			$text = $text . " an ";
		} else {
			$text = $text . " a ";
		}
	} else { // Several
		$numeric_or_alpha = rand(0, 1);
		if ($numeric_or_alpha == 0) { // Numeric
			$text = $text . " " . lcfirst(getLineFromFile('numericamounts'));
		} else { // Alpha
			$text = $text . " " . lcfirst(getLineFromFile('textamounts'));
		}	
		$final_noun = $objPlural->pluralize($final_noun);		
	}	

	$text = $text . " " . $final_noun . ".";
	
	echo $text;
	
}


function getLineFromFile($source) {
	
	$file_contents = file("lists/" . $source . ".txt");
	
	$selection = rand(0, count($file_contents) - 1);
	
	return trim($file_contents[$selection]);

}

?>