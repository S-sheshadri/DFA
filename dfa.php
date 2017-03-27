<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="dfa.css">
<script type="text/javascript">
function show () 
{
document.getElementById('dfa').style.visibility="visible";}
</script>
  </head>
  <body>
	<div class="Head">
	  DFA SIMULATOR
	</div>
<form class="" action="<?php $_SESSION['dfa']=1; header('dfa.php');?>" method="post">

	  <div class="Body">
	    <textarea name="pgm" id="pgm" rows="20" cols="80">//Write code here</textarea>
	  </div>

	  <div class="buttons">
	    <button id="analyze" class="buttons" type="submit" onclick="show()">Analyze</button>
	  </div>
</form>
  </body>
</html>
<?php
    error_reporting(~E_NOTICE);
    require_once 'Image/GraphViz.php';
    if($_SESSION['dfa']==1)
	  {
	    $graph = new Image_GraphViz();
	    $input = $_POST['pgm'];
	    file_put_contents("input.txt",$input);
	    $command = escapeshellcmd("python dfaG.py input.txt");
	    $output = shell_exec($command);
	    file_put_contents("output.dot",$output);
	    $graph->renderDotFile("output.dot", "outputImage.png","png");
	    echo "<div id='dfa'><img src='outputImage.png' /></div>";
	}
  $_SESSION['dfa']=0;
?>


