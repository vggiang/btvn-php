Viết chương trình PHP để tính số lượng phần tử trong một mảng. <br>
<?php
function demMang($array) {
    return count($array);
}

// Tính số lượng phần tử trong mảng $array
$array = array(1, 2, 3, 4, 5);
$count = demMang($array);

// In ra số lượng phần tử
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Số lượng phần tử trong mảng: $count";
?>