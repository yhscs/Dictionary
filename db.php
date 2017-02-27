<?php
	mysql_connect("HOSTs","USER","PASS");
	@mysql_select_db("DB") or die ('<p>The page failed to load because it could not access the database.</p>');
?>