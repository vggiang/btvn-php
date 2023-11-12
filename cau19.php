Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.<br>
<?php
function xepGiamDan($array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

// Sắp xếp mảng $array theo thứ tự giảm dần
$array = array(1,5,0,8,78,22,44);
$sorted_array = xepGiamDan($array);

// In ra mảng đã sắp xếp
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Mảng sau khi sắp xếp giảm dần: " . implode(', ', $sorted_array);


?>