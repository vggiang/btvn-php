Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. <br>
số nguyên dương mà tổng các ước nguyên dương(trừ nó)=nó.<br>
<?php
function soHH($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}

// Kiểm tra số 6 có phải là số hoàn hảo hay không
$n = 6;
$soHoanhao = soHH($n);

// In ra kết quả
echo $soHoanhao ? "Số $n là số hoàn hảo" : "Số $n không phải là số hoàn hảo";

?>