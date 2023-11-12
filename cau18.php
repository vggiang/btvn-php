Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.<br>
<?php
function demSoLan($array, $value) {
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

// Đếm số lần xuất hiện của phần tử 2 trong mảng $array
$array = array(1, 2, 3, 2, 5, 2, 2, 2);
$count = demSoLan($array, 2);

// In ra số lần xuất hiện
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Số lần xuất hiện của phần tử 2 là: $count";
?>
