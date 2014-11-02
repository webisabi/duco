<?php

/**
 * Initialise new footer arguments
 */

function webisabi_credits() {
    echo 'Web development by <a href="http://www.webisabi.co.uk/" title="webisabi" />WebiSabi</a>' . "\n";
}
add_action( 'get_footer', 'webisabi_credits' ); 
 

?>