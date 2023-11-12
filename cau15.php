Viết chương trình PHP để đảo ngược một chuỗi. <br>
<?php
function daoNguoc($string) {
    $chuoi_daonguoc = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $chuoi_daonguoc .= $string[$i];
    }
    return $chuoi_daonguoc;
}

// Đảo ngược chuỗi "hello"
$string = "hello";
$chuoi_daonguoc = daoNguoc($string);

// In ra chuỗi đảo ngược
echo "Chuỗi ban đầu: $string " ;
echo "<br>";
echo "Chuỗi sau đảo ngược: $chuoi_daonguoc";
?>