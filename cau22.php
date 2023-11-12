Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. <br>
<?php
function timUCLN($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function timBCNN($a, $b) {
    return ($a * $b) / timUCLN($a, $b);
}

// Tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên $a và $b
$a = 15;
$b = 20;

$gcd = timUCLN($a, $b);
$lcm = timBCNN($a, $b);

// In ra kết quả

echo "Ước số chung lớn nhất của $a và $b là: $gcd";
echo "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là: $lcm";

?>