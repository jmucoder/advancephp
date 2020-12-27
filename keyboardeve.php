<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script>
  	$(document).ready(function(){
  		$('body').keypress(function(){
  			$(this).css('background-color', 'red')
  		});
  		$('body').keydown(function(){
  			$(this).css('background-color', 'yellow')
  		});
  		$('body').keyup(function(){
  			$(this).css('background-color', 'green')
  		});
  		});
  	     	

  </script>
</body>
</html>