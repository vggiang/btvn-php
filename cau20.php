Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.<br>
<?php

// Hàm để thêm một phần tử vào đầu mảng
function themDauMang($array, $value)
{
    array_unshift($array, $value);
    return $array;
}

// Hàm để thêm một phần tử vào cuối mảng
function themCuoiMang($array, $value)
{
    $array[] = $value;
    return $array;
}

// Mảng ban đầu
$mangBanDau = array(1, 2, 3, 4, 5);

// Phần tử cần thêm
$phanTuMoi = 0;

// Thêm vào đầu mảng
$mangThemDau = themDauMang($mangBanDau, $phanTuMoi);

// Thêm vào cuối mảng
$mangThemCuoi = themCuoiMang($mangBanDau, $phanTuMoi);

// Hiển thị kết quả
echo "Mảng ban đầu: " . implode(', ', $mangBanDau) . "<br>"; // gộp các phần tử mảng thành chuỗi
echo "Mảng sau khi thêm vào đầu: " . implode(', ', $mangThemDau) . "<br>";
echo "Mảng sau khi thêm vào cuối: " . implode(', ', $mangThemCuoi);





?>