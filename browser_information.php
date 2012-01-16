<?php

// phpinfo();

echo ( browser_detection( 'browser_number' ) .'<br>'.
browser_detection( 'browser_working' ) .'<br>'.
browser_detection( 'os' ) .'<br>'.
browser_detection( 'os_number' ) );
?>

Outputs (browser number, browser name, os, os number):
1.5
moz
nt
5.1

<?php
if ( ( browser_detection( 'browser_working' ) == 'ie' )
&&
( browser_detection( 'browser_number' ) >= 5 ) )
{
echo 'it is Internet Explorer ' .
browser_detection( 'browser_number' );
// or anything else you want to happen of course
}
?>
