<?php
function your_function() {
    echo 'This is inserted at the bottom';
}
add_action( 'wp_footer', 'your_function' );
?>