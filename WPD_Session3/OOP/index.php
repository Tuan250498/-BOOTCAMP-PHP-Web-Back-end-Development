<?php
include ("class_lip.php");
?>
<?php
    $stefan = new person();
    $jimmy = new person;
    $stefan->set_name("Nguyen Tuan");
    $jimmy->set_name("Nguyen Trang");
    echo "Stefab's full name:".$stefan->get_name()."<br>";
    echo  "Jimmy's ful name:".$jimmy->get_name();
?>
