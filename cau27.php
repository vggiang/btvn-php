Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. <br>
<?php
function timSoAmLonNhat($array) {
    if (count($array) == 0) {
        return false;
    }

    $soAmLonNhat = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < 0 && $array[$i] > $soAmLonNhat) {
            $soAmLonNhat = $array[$i];
        }
    }

    return $soAmLonNhat;
}

// Tìm số âm lớn nhất trong mảng $array
$array = array(-1, 2, 3, 4, 5, -6, 7, 8, 9, 10);
$soAmLonNhat = timSoAmLonNhat($array);

// In ra số âm lớn nhất

echo "Mảng ban đầu: " . implode(', ', $array) . "<br>"; // gộp các phần tử mảng thành chuỗi
echo "Số âm lớn nhất là:  $soAmLonNhat";

?>
