<?php
// check for form submission - if it doesn’t exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: combinatoriaV3.php'); exit;
}
// get the posted data
$m = $_POST['m'];
$n= $_POST['n'];

// check m
if (empty($m))
    $error = 'Debes indicar valor para M.';
// check n
elseif (empty($n))
    $error = 'Debes indicar valor para N.';

// check if an error was found - if there was, send the user back to the form and show the error
if (isset($error)) {
    header('Location: combinatoriaV3.php?e='.urlencode($error)); exit;
}
else
{
	include('../application/combinatoria.php');
	
	// send the user back to the form with the result
	header('Location: combinatoriaV3.php?s='.urlencode('El resultado es: '.combinatoria($m,$n))); exit;
}
?>