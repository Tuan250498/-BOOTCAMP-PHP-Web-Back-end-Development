<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>
<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
<?php
$x = 5; /* global scope */

function myTest() {
    /* sử dụng biến x ở bên trong hàm sẽ sinh ra lỗi */
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<html>
<body>
<h1>Welcome to my home page!</h1>
<?php
include 'noneExistFile.php';
echo "No error. Executed.";
?>
</body>
</html>
<html>
<body>
<h1>Welcome to my home page!</h1>
<?php
require 'noneExistFile.php';
echo "With error. Not executed.";
?>
</body>
</html>