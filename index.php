<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <script>
 	var dpm = function(){
 		alert('Don\'t push me cause i\'m close to the edge');
 	}
 </script>
 <p> this is a test</p>
 <?php echo '<p>Hello World!!!</p>'; ?> 
 <?php echo '<p>LA LA LA</p>'; ?> 
 <button onclick="dpm()">Push Me</button>

 </body>
</html>
