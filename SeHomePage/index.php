<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PlantATree</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
  	<link rel="stylesheet" href="css/style.min.css">
</head>

<script>

function showTree(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            
            xmlhttp = new XMLHttpRequest();
        } else {
            
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","selectTree.php?c="+str,true);
        xmlhttp.send();
    }
}

</script>
<body>
	<div id="wrapper" class="wrapper">
	  <header class="header htmleaf-header">
			<h1>PlantATree <span> </span></h1>
		</header>
	  <main>
	    <div class="container">
	      <section>
		  <input type="radio" name="tree" value="1" onchange='showTree(this.value)'> Apple Tree<br>
		  <img src="https://i.ebayimg.com/images/g/C5oAAOSwU91aVxee/s-l300.jpg" alt="apple_tree">
		  <br>
		  <input type="radio" name="tree" value="2" onchange='showTree(this.value)'> Lemon Tree<br>
		  <img src="https://images-na.ssl-images-amazon.com/images/I/71zinrf5WwL._SY355_.jpg" alt="lemon_tree">
		  
		</br></br>
		<div id="txtHint"><b></b></div>

			
	        
	
		
	        <p> </p>
	      </section>
	    </div>
	  </main>
	</div>

</body>