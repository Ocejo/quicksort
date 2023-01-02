<?php
$arr = [7,2,4,7,2,1,4,2,65,87,53,22,21,1];
function QuickSort($array){
    if(count($array) < 1) return $array;
    $left   = [];
    $rigth  = [];
    $pivote = $array[0];
    $count  = count($array);
    for ($i = 1; $i < $count; $i++) {
         if ($array[$i] <= $pivote){
            array_push($left,$array[$i]);
         }else{
            array_push($rigth,$array[$i]);
         }    
    }
    return array_merge(QuickSort($left), [$pivote], QuickSort($rigth));
}
echo '<pre>';
print_r(QuickSort($arr));
?>
