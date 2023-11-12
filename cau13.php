Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.<br>
<?php
function loaiBo($array) {
    $mang_moi = array_unique($array); // loại bỏ có giá trị trùng lặp trong một mảng.
    return $mang_moi;
}

// Tạo mảng ban đầu
$array = array(1, 2, 3, 3, 4, 5, 5);

// Loại bỏ các phần tử trùng lặp
$mang_moi = loaiBo($array);

// In ra mảng sau khi loại bỏ các phần tử trùng lặp
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Mảng sau khi bỏ phần tử trùng lặp: " . implode(', ', $mang_moi) ;

?>