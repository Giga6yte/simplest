<?php

function print_r_pre($param) {
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

print_r_pre('test');
?>