Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.<br>
<?php
function fibonacci($a, $b, $n) {
    if ($n == 0) {
        return $a;
    }
    if ($n == 1) {
        return $b;
    }
    return fibonacci($b, $a + $b, $n - 1);
}

// In ra các số Fibonacci trong khoảng 0 đến 10
echo "Các số Fibonacci trong khoảng 0 đến 10:";
for ($i = 0; $i <= 10; $i++) {
    echo " " . fibonacci(0, 1, $i);
}
?>