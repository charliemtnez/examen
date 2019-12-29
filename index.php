<?php
echo '<h4>','Proposed Exercise',"</h4>";

/**
 * Function that returns type of multiplicity if it exists in 3, 5, both or none
 * 
 * @param int 
 * 
 * @return int|string 
 */
function multiplo($v){

    $salida = [
        "00" => $v,
        "10" => "Linio",
        "01" => "IT",
        "11" => "Linianos"
    ];
    $m3 = strval((int)is_int($v / 3));
    $m5 = strval((int)is_int($v / 5));

    return $salida[$m3.$m5];
}

/**
 * Function that runs through the numbers and sends to find its multiplicity
 * 
 * @param int
 * 
 * @return string
 */
function numberList($ended = 100)
{
    if(is_numeric($ended) && $ended > 0){
        $salida = '';
        for ($i=1; $i<=(int) $ended;$i++){
            $salida .= multiplo($i)." \n";
        }
        return $salida;
    }
    return 'error';
}

echo nl2br(numberList());

?>