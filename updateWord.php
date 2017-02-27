<?php
	require_once('db.php');

	$edit=mysql_real_escape_string($_POST["edit"]);
    $query="SELECT * FROM `dictionary` WHERE `word` = '$edit'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

	if($count>0)
	{
		$Syn=mysql_real_escape_string($_POST["Syn"]);
		$Def=mysql_real_escape_string($_POST["Def"]);
		$store= mysql_result($result,0,'number');
		$query="UPDATE `dictionary` SET `definitions` = '$Def' AND `synonyms` = '$Syn' WHERE `number` =$store";
		mysql_query($query);
	}
	else 
		echo "The word could not be found.";
?>
