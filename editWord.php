<?php
	require_once('db.php');

	$edit=mysql_real_escape_string($_POST["edit"]);
    $query="SELECT * FROM `dictionary` WHERE `word` = '$edit'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

	if($count>0)
	{
		echo mysql_result($result,0,'definitions');
		echo "::DATA::";
		echo mysql_result($result,0,'synonyms');
		echo "::DATA::";
	}
	else 
		echo "The word could not be found.";
?>
