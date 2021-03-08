<?php
function soma(int  ...$valores):string{
  
    return array_sum($valores);   

}

echo soma(2.5,2.6);
echo "<br>";
echo soma(2,2);
echo "<br>";
?>