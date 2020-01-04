<?php 

$command = escapeshellcmd('python ../assets/py/snapshot.py');
$output = shell_exec($command);
echo $output;

?>