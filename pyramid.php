<?php
create_pyramid("*", 5);
create_pyramid("@", 10);
create_pyramid("^_^", 10);

function create_pyramid($string, $level) {
    echo "<pre>";
    $level = $level * 2;
    for($i = 1; $i <= $level; $i ++) {
        if (!($i % 2) && $i != 1)
            continue;   
        print str_pad(str_repeat($string, $i),($level - 1) * strlen($string), " " , STR_PAD_BOTH);
        print PHP_EOL;
    }
}