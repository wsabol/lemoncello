<?php

chdir( '/home/saboldru/public_html/limoncello' );


// The commands
$commands = array(
  'echo $PWD',
  'whoami',
  'bash _githook/gitsync.sh'
);

// Run the commands for output
$output = '';
foreach($commands AS $command){
	// Run it
	$tmp = shell_exec($command);
	// Output
	$output .= trim($tmp) . "\n";
}

/*
// run build tests
$output = [];
@exec("php build/_test_run.php", $output);

if ( in_array("FAILED", $output) || 1 == 1 ) {
  smail( "wsabol39@gmail.com", "BUILD TEST REPORT - ".date("Y-m-d H:i:s"), implode("<br />", $output) );
}
*/

$App = "";
exit;
?>
