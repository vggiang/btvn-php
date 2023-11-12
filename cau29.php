Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.<br>
Số cp là số tự nhiên có căn bậc hai là một số tự nhiên<br>
<?php
function timSoCP($min, $max) {
    if ($min > $max) {
        return [];
    }

    $result = []; // khởi tạo mảng result để lưu trữ các số chính phương.
    for ($i = $min; $i <= $max; $i++) {
        $sqrt = sqrt($i);
        if ($sqrt == floor($sqrt)) { // làm tròn
            $result[] = $i;
        }
    }

    return $result;
}

// Tìm số chính phương trong khoảng từ 1 đến 100
$min = 1;
$max = 100;
$soCP = timSoCP($min, $max);

// In ra kết quả
echo "Các số chính phương trong khoảng từ 1 đến 100 là: " . implode(", ", $soCP);

?>