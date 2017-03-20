<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="Head">
  DFA SIMULATOR

</div>
<form class="" action="<?php $_SESSION['dfa']=1; header('dfa.php');?>" method="post">

  <div class="Body">
    <textarea name="pgm" id="pgm" rows="8" cols="80">//Write code here</textarea>
  </div>

  <div class="buttons">
    <input type="submit" name="" value="Submit"/>

  </div>
</form>
  </body>
</html>

<?php
    error_reporting(E_ALL & ~E_NOTICE);
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
	    echo "<img src='outputImage.png' />";
	}
  $_SESSION['dfa']=0;
?>