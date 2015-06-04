<?php

include 'magtisms.lib.php';

$Magti = new magtisms( 'XXXX', 'XXXX', 000, 00000 );

$send = $Magti->send_sms( '571559696', 'test' );

print_r( $send );

?>