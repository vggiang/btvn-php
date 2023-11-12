Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. <br>
<?php
function timSoLeLonNhat($array) {
    if (count($array) == 0) {
        return false;
    }

    $soLe = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] % 2 != 0 && $array[$i] > $soLe) {
            $soLe = $array[$i];
        }
    }

    return $soLe;
}

// Tìm số lẻ lớn nhất trong mảng $array
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$soLe = timSoLeLonNhat($array);

// In ra số lẻ lớn nhất
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>"; // gộp các phần tử mảng thành chuỗi
echo "Số lẻ lớn nhất trong mảng là:$soLe";


?>