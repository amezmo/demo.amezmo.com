<?php

$message = 'file_put_contents(/webroot/release/2020-05-27T19:43:43.288224Z.f70086f4/storage/framework/sessions/1Q0ibPPrycZ542Of98RZt5uvcqn5AHeIDTRyErFh): failed to open stream: Permission denied';


if (strpos($message, 'file_put_contents(') === 0) {
    $file = substr($message, strlen('file_put_contents('));
    $file =  substr($file, 0, strpos($file, ')')) . PHP_EOL;
    
    clearstatcache();
    `stat $file`;
}
