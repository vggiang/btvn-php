Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.<br>
<?php
function check($number)
{
    if ($number <= 1) {
        return false;
    } 
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }   
    return true;
}


function findPrimes($a, $b)
{
    $primes = array();
    for ($i = $a; $i <= $b; $i++) {
        if (check($i)) {
            $primes[] = $i;
        }
    }    
    return $primes;
}

// Khoảng cần tìm số nguyên tố
$a = 10;
$b = 50;

// Tìm số nguyên tố trong khoảng
$primeNumbers = findPrimes($a, $b);

// Hiển thị kết quả
echo "Các số nguyên tố trong khoảng từ $a đến $b là: " . implode(', ', $primeNumbers);

?>
