<?php
	$command = escapeshellcmd('python dfaG.py input');
	$output = shell_exec($command);
	file_put_contents("output1.dot", $output);
	$command1 = escapeshellcmd('sudo dot -Tpng output1.dot abc1.png');
	$output1 = shell_exec($command1);
	file_put_contents("abc1.png", $output1);
	echo "<img src='abc1.png'>";
?>
