<?php

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
 $_SESSION['lang'] = $_GET['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
  echo "<script type='text/javascript'> window.location.reload(); </script>";
 }
}

include "lang_en.php";

// Include Language file
if(isset($_SESSION['lang']) && ($_SESSION['lang']!="en") ){
 include "lang_".$_SESSION['lang'].".php";
 	$finalarray = bam($en_array,$lang_array);
} else {
	$finalarray = $en_array;
}

function bam($en_array,$lang_array) {
	$finalarray = array();
	//if language selected 
	foreach ($en_array as $key => $value) { //replace empty language values with english
		if(empty($lang_array[$key])) {
			$finalarray[$key] = $en_array[$key];
		} else {
			$finalarray[$key] = $lang_array[$key];
		}
	}
	return $finalarray;
	
}
?>