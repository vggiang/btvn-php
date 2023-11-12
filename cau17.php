Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.<br>
Palindrome là xâu kí tự mà khi viết từ phải qua trái hay ngược lại thì không đổi. VD: MADAM, IOI, <br>
<?php
function checkPa($string) {
    $reversed_string = strrev($string);
    return $string == $reversed_string;
}

// Kiểm tra xem chuỗi "madam" có phải là chuỗi Palindrome hay không
$string = "madam";
$check_Pa = checkPa($string);

// In ra kết quả
echo $check_Pa ? "Chuỗi '" . $string . "' là chuỗi Palindrome" : "Chuỗi '" . $string . "' không phải là chuỗi Palindrome";
?>