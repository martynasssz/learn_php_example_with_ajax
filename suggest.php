<?php
// People Array @TODO - Get from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String

$q = $_REQUEST['q'];

$suggestion = "";

//Get Suggestions
if ($q !=="") {
	$q = strtolower($q); // strtolower()pavercia mazosiom raidemis
	$len = strlen($q); //strlen() Return the length of the string
	foreach($people as $person){
		if(stristr($q, substr($person, 0, $len))){
				//substr() - grazina dali strungo. PVZ. echo substr("Hello word", 3), grazins lo world (praleis Hel), jei nurodysime substr("Hello word", 0, 3)  grazins Hel, jei nurodysim, grazins lo wo
				// syntax substr(string,start,length)
				// echo stristr("Hello world!","WORLD") Find the first occurrence of "world" inside "Hello world!", and return the rest of the string. ATS: world Randa pirma zodi pagal uzduota pradzia syntax stristr(string,search,before_search)

			if($suggestion === ""){
				$suggestion = $person;
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;