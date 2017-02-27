<?php
	require_once('db.php');

	$word=mysql_real_escape_string($_POST["word"]);
	$definition=mysql_real_escape_string($_POST["def"]);
	$synonym=mysql_real_escape_string($_POST["syn"]);
    $query="INSERT INTO `dictionary` (`number` ,`definitions` ,`synonyms` ,`word`) VALUES (NULL , '$definition', '$synonym', '$word');";

	if (mysql_query($query))
		echo 'The word has been successfully added.';
	else 
		echo 'The word could not be added because there was a problem with the database.';
?>
