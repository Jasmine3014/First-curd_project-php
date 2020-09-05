<?php
$mysqli = new mysqli ('localhost','root','','firstday');
try {
	if(!$mysqli){

		echo "connetion failed";
	}
} catch (Exception $exception){
	$exception->get_message();
}

