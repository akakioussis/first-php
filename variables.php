<meta http-equiv="refresh" content = "0" />
<h3> php</h3>

<?php 
// $name = array('bread' => 3, 'moss' => 4);
// $name2 = [3 => 'bread', 'moss' =>4];
// echo $name['bread'];
// echo $name2[3];

$nameArrays = array('a' => 1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5);
foreach($nameArrays as $nameArray => $nameNumber){
    echo ' '.$nameArray. ': ' .$nameNumber. ' ,';
}
?>