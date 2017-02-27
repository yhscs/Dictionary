<?php
	require_once('db.php');

	$remove=mysql_real_escape_string($_POST["remove"]);
	$query="SELECT * FROM `dictionary` WHERE `word` = '$remove'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

	if($count>0)
	{
		$store= mysql_result($result,0,'number');
		$query="DELETE FROM `dictionary` WHERE `number` = $store";
		mysql_query($query);
		echo "The word has been successfully removed.";
	}
?>
