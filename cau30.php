Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.<br>
<?php
function checkChuoiCon($chuoiCon, $chuoi) {
    if (strpos($chuoi, $chuoiCon) !== false) {
        return true;
    }

    return false;
}

// Kiểm tra xem chuỗi "abc" có phải là chuỗi con của chuỗi "abcdefg" hay không
$chuoiCon = "abc";
$chuoi = "abcdefg";
$checkChuoiCon = checkChuoiCon($chuoiCon, $chuoi);

// In ra kết quả
echo "Chuỗi chính là: $chuoi";
echo "<br>";
echo "Chuỗi con là: $chuoiCon";
echo "<br>";
echo $checkChuoiCon ? "Có là chuỗi con" : "Không là chuỗi con";

?>