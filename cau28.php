Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. <br>
<?php
function tongSoLe($n) {
    if ($n <= 0) {
        return 0;
    }

    $sum = 0;
    for ($i = 1; $i <= $n; $i += 2) { // hàm duyệt qua từng số từ 1 đến n với bước nhảy là 2.
        $sum += $i;
    }

    return $sum;
}

// Tính tổng các số lẻ từ 1 đến 10
$n = 10;
$sum = tongSoLe($n);

// In ra kết quả
echo "Tổng các số lẻ từ 1 đến 10 là: $sum";

?>