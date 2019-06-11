<?php
if($_SERVER["REQUEST_METHOD"]="POST"){
    $sanpham = $_POST["product"];
    $gia = $_POST["price"];
    $phantram = $_POST["percent"];

    $chietkhau = $gia * $phantram *0.01;
    $giamoi=$gia-$chietkhau;
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
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span> <?php echo $sanpham ?></span><br/>
    <label>Price: </label>
    <span><?php echo $gia?>$</span><br/>
    <label>Discount Percent: </label>
    <span> <?php echo $phantram ?>%</span><br/>
    <label>Discount Amount: </label>
    <span>$<?php echo $chietkhau ?></span><br/>
    <label>Discount Price: </label>
    <span>$<?php echo $giamoi ?></span><br/>
</div>
</body>
</html>