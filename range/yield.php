<?php
function useYield(){
    for($i = 0;$i<3;$i++){
        echo 1;
        yield $i;
    }
}
$a = useYield();
foreach ($a as $item){
    echo $item;
    echo 'fa';
}