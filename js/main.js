$(".searchButton").click(function(){look();});
$(".login").click(function(){login();});

function look()
{
	var form=$("#input").val();
	$.post("dict.php",{word:form},function(data){
		if (data != 'No results found.')
		{
			data=data.split("::DATA::");
			var content="<div id='zero'><h3>"+data[0]+"</h3></div><div id='one'><u>Definition:</u><br>"+data[1]+"</div><div id='two'><u>Synonyms:</u><br>"+data[2]+"</div>";
			$(".content").html(content);
		}
		else
			alert(data);
	});
}

function login()
{
	var form=$("#pass").val();
	$.post("admin.php",{pass:form},function(data){
		if (data=="The password is incorrect.")
			alert(data);
		else {
			$(".headerstyle").hide(); 	
			$(".adminLogin").html(data);
			$(".addWord").click(function(){add(); });
			$(".removeWord").click(function(){remove();	});
			$(".editWord").click(function(){edit();	});
			$(".submitAdd").click(function(){addWord(); });
			$(".submitRemove").click(function(){removeWord(); });
			$(".submitEdit").click(function(){editWord(); });
		}
	});						
}

function add()
{
	$(".adding").show(); 
}

function addWord()
{
	var word=$("#addWord").val();
	var def=$("#addDef").val();
	var syn=$("#addSyn").val();
	$.post("addWord.php",{word:word,def:def,syn:syn},function(data){
		alert(data); 
	});
}

function remove()
{	
	$(".removing").show();
}

function removeWord()
{
	var remove=$("#deleteWord").val();
	$.post("removeWord.php",{remove:remove},function(data){
		alert(data);
	});
}
function edit()
{	
	$(".editing").show();
}
function editWord ()
{

	var edit=$("#editingWord").val();
	$.post("editWord.php",{edit:edit},function(data){
		if (data=="The word could not be found.")
			alert(data);
		else
		{
			$(".editingTwo").show();
			$(".submitEditTwo").click(function(){editWordTwo(); });
			data=data.split("::DATA::");
			$("#editDef").val(data[0]);
			$("#editSyn").val(data[1]);
		}
	});
}

function editWordTwo()
{
	var edit=$("#editingWord").val();
	var Def=$("#editDef").val();
	var Syn=$("#editSyn").val();
	$.post("updateWord.php",{edit:edit,Def:Def,Syn:Syn},function(data){
		alert(data);
	});
}