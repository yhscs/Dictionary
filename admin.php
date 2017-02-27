<?php
	if (isset($_POST['pass'])){
		$pass=$_POST['pass'];

		if ($pass!='yhs1893')
			exit("The password is incorrect."); 
		else
			exit("<button class='addWord'>add word</button><br><br><button class='editWord'>edit word</button><br><br><button class='removeWord'>remove word</button>");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dictionary Control Panel</title>
    <meta name="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="adminHead">
		<h3><span class="headerstyle">Login</span></h3>
	</div>

	<div class="adminLogin">
		<p>password:<input type="password" id= "pass"><br></p>
		<button class="login">Login</button>
	</div>

    <div class="adding">
        add a word<br>
        <input type="text" id= "addWord"><br>
        add a definition<br>
        <textarea id= "addDef"></textarea><br>
        add synonyms<br>
        <input type="text" id= "addSyn"><br>
        <br><button class="submitAdd" >submit</button>
    </div>

    <div class="removing">
        remove a word<br>
        <input type="text" id="deleteWord"><br>
        <br><button class="submitRemove">submit</button>
    </div>

    <div class="editing">
        edit a word<br>
        <input type="text" id= "editingWord"><br>
        <br><button class="submitEdit" >submit</button>

        <div class="editingTwo">
            edit the definition<br>
            <textarea id="editDef"></textarea><br>
            edit the synonyms<br>
            <input type="text" id="editSyn"><br>
            <br><button class="submitEditTwo" >submit</button>
        </div>
    </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
