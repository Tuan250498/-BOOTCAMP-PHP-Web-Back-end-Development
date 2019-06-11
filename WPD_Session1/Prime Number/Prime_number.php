<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST["prime_number"];
    function check_prime($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<$n;$i++){
            if($n%$i==0){
                return false;
            }
        }
        return true;
    }
    if ( check_prime($num1)){
        echo $num1." la so nguyen to";
    }else{
        echo $num1." Khong phai la so nguyen to";
    }
    echo("<br> Các số nguyên tố nhỏ hơn 100 là: <br>");
    for ($i = 0; $i < 100; $i++) {
        if (check_prime($i)) {
            echo($i . " ");
        }
    }
}
?>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<style>
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1{
        color: navy;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }
    #from{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }
</style>
<body>
<div id="content">
    <h1>Prime Number</h1>
    <form method="post">
        <div id="data">
            <label>Enter the prime number:</label>
            <input type="text" name="prime_number"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Prime Number"/>
        </div>
    </form>
</div>
</body>
</html>