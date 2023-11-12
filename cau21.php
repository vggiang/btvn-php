Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. <br>
<?php
function soLonThuHai($array) {
    if (count($array) < 2) {
        return false;
    }

    $max = $array[0];
    $second_max = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $second_max = $max;
            $max = $array[$i];
        } else if ($array[$i] > $second_max) {
            $second_max = $array[$i];
        }
    }

    return $second_max;
}

// Tìm số lớn thứ hai trong mảng $array
$array = array(1, 2, 3, 4, 5);
$second = soLonThuHai($array);

// In ra số lớn thứ hai
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>"; // gộp các phần tử mảng thành chuỗi
echo "Số lớn thứ hai là: $second";

?>