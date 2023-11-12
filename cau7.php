Viết chương trình PHP để tính giai thừa của một số nguyên dương.<br>
<?php

// Hàm tính giai thừa
function giaiThua($n) {
    // Kiểm tra xem số n có hợp lệ không
    if ($n < 0) {
        return -1;
    }

    // Tính giai thừa
    if ($n == 0) {
        return 1;
    } else {
        return $n * giaiThua($n - 1);
    }
}

// In ra giai thừa của số 5
echo giaiThua(8);

?>
