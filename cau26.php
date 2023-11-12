Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. <br>
<?php
function timSoDuongLonNhat($array) {
    if (count($array) == 0) {
        return false;
    }

    $soDuongLonNhat = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > 0 && $array[$i] > $soDuongLonNhat) {
            $soDuongLonNhat = $array[$i];
        }
    }

    return $soDuongLonNhat;
}

// Tìm số dương lớn nhất trong mảng $array
$array = array(-1, 2, 3, 4, 5, -6, 7, 8, 9, 10);
$soDuongLonNhat = timSoDuongLonNhat($array);

// In ra số dương lớn nhất
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>"; // gộp các phần tử mảng thành chuỗi
echo "Số dương lớn nhất là: $soDuongLonNhat";

?>
