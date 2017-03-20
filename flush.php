<?php
set_time_limit(60);
$i = 1;
while(true){
echo $i++;
    //
    ob_flush();
    flush();
    sleep(5);
}