<!DOCTYPE html>
<html>
<head>
	<title>Seach User</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	<script>
		function showSuggestion(str){
			//console.log(str);
			if(str.length == 0) { //tikrinam stringo ilgi, jei jis lygus nuliui, jokios reiksmes nepaduodame
				document.getElementById('output').innerHTML = ''; //innerHTML = '', nepaduoda nieki i output id
			} else {
				// AJAX REQUEST
				var xmlhttp = new XMLHttpRequest(); //create new variable and set it to object
				xmlhttp.onreadystatechange = function(){ //xmlhttp call on onreadystatechange
					if (this.readyState == 4 && this.status == 200) { //4 means, we got a response, 200 means no error  
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);//?q= because we sent a long string 
				xmlhttp.send(); 
			}

		}	
	</script>
</head>
<body>
	<div class="container">
		<h1>Search Users</h1>
		<form>
			Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)"><!--onkeyup="showSuggestion(this.value) to make a request everytime we type, this.value pass value to javascript function-->
		</form>
		<p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
	</div>
</body>
</html>