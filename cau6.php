Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. <br>

<?php
// Hàm sắp xếp mảng theo thứ tự tăng dần
function sapXep($array) {
    // Kiểm tra xem mảng có rỗng không
    if (empty($array)) {
        return $array;
    }

    // Sắp xếp mảng
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                // Hoán đổi vị trí của hai phần tử
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    // Trả về mảng đã được sắp xếp
    return $array;
}

// Tạo mảng
$array = array(5, 3, 1, 2, 4);

// Sắp xếp mảng
$array_sorted = sapXep($array);

// In ra mảng đã được sắp xếp
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Mảng đã được sắp xếp theo thứ tự tăng dần: " . implode(',',$array_sorted) ;

?>
