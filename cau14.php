Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. <br>
<?php
function timViTri($array, $value) {
    $index = array_search($value, $array); // tìm kiếm một giá trị trong một mảng và sẽ trả về KEY của giá trị đó nếu thành công.
    return $index === false ? -1 : $index;
}

// Tìm vị trí của phần tử 2 trong mảng $mang
$array = array(1, 2, 3, 4, 5);
$index = timViTri($array, 2);

// In ra vị trí của phần tử 2
echo "Mảng ban đầu: " . implode(', ', $array) . "<br>";
echo "Vị trí của phần tử 2 là : $index" ;
?>
