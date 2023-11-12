Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. <br>

<?php 
function checkAm($number) {
    $a = str_split($number); // hàm trả 1 chuỗi về 1 mảng
    $sum = 0;
    for ($i = 0; $i < count($a); $i++) {
        $sum += pow($a[$i], count($a));
    }
    return $number == $sum;
}

// Kiểm tra số 153 có phải là số Armstrong hay không
echo checkAm(153) ? "153 là số Armstrong" : "153 không phải là số Armstrong";
?>