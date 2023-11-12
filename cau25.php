Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.<br>
<?php 
function timSoNT($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; $i++) { // hàm duyệt qua từng số từ 2 đến căn bậc hai của n
        if ($n % $i == 0) { // Nếu n chia hết cho một số trong khoảng này, thì số n không phải là số nguyên tố.
            return false;
        }
    }

    return true;
}

// Kiểm tra số 13 có phải là số nguyên tố hay không
$n = 13;
$soNT = timSoNT($n);

// In ra kết quả
echo $soNT ? "Số $n là số nguyên tố" : "Số $n không phải là số nguyên tố";

?>