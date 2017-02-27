<?php
	require_once('db.php');

	$word=mysql_real_escape_string($_POST["word"]);
	$query="SELECT * FROM `dictionary` WHERE `word` = '$word'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

	if($count>0)
	{
		echo mysql_result($result,0,'word');
		echo '::DATA::';
		echo mysql_result($result,0,'definitions');
		echo '::DATA::';
		echo mysql_result($result,0,'synonyms');
		echo '::DATA::';
	}
	else
		echo 'No results found.';
?>
