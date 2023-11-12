Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. <br>
<?php
function chenPhanTu($mang, $giatri, $vitri) {
    $chieudai = count($mang);
    if ($vitri < 0 || $vitri > $chieudai) {
        return false;
    }
    $mang_moi = array_slice($mang, 0, $vitri); //  trả về dãy phần tử từ mảng array khi được xác định bởi các tham số offset và length.
    $mang_moi[] = $giatri;
    $mang_moi = array_merge($mang_moi, array_slice($mang, $vitri)); // sáp nhập các phần tử của 1 or nhiều mảng
    return $mang_moi;
}

// Chèn phần tử "10" vào mảng $arr ở vị trí thứ 2
$arr = array(1, 2, 3, 4, 5);
$arrayy = chenPhanTu($arr, 10, 2);

// In ra mảng $arr sau khi chèn
echo "Mảng ban đầu: " . implode(', ', $arr) . "<br>";
echo "Mảng sau khi chèn phần tử 10 vào vị trí thứ 2: " . implode(', ', $arrayy) . "<br>";

?>