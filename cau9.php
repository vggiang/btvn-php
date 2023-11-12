Viết chương trình PHP để tính tổng của các số trong một mảng.<br>
<?php

// Hàm tính tổng của các số trong một mảng
function tongMang($array) {
    // Kiểm tra xem mảng có rỗng không
    if (empty($array)) {
        return 0;
    }

    // Khởi tạo biến tổng
    $sum = 0;
    // Duyệt qua các phần tử trong mảng
    foreach ($array as $value) {
        // Cộng giá trị của mỗi phần tử vào biến tổng
        $sum += $value;
    }

    // Trả về tổng
    return $sum;
}

// Tạo mảng
$array = array(1, 2, 3, 4, 5);

// Tính tổng các số trong mảng
$sum = tongMang($array);

// In ra tổng
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Tổng các số trong mảng là: " . $sum;

?>
