<?php
function selectionSort($list,$des=true){

    for ($i = 0; $i < count($list) ;$i++){
        $value = $list[$i];
        $index = $i;
        for ($j = $i +1; $j < count($list) ;$j++){
            $bt=$des?$value < $list[$j]:$value > $list[$j];
            if ($bt){
                $value =$list[$j];
                $index = $j;
            }
        }
        $temp = $list[$i];
        $list[$i] = $value;
        $list[$index]=$temp;
    }
    return $list;
}
$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "<pre>";
print_r(selectionSort($arr));