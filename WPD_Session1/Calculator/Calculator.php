<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$num1=$_POST["number1"];
$num2 =$_POST["number2"];
$calculation = $_POST["pheptinh"];
Switch($calculation){
    case "+":
        $Ketqua=$num1+$num2;
        break;
    case "-":
        $Ketqua=$num1-$num2;
        break;
    case "*":
        $Ketqua =$num1*$num2;
        break;
    case "/":
        $Ketqua = $num1/$num2;
        break;
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
    <h1>Simple Calculator</h1>
    <form method="post">
        <div id="data">
            <label>First operand:</label>
            <input type="text" name="number1"/><br/>
            <label>Operator:</label>
            <select id="from" name="pheptinh" >
                <option value="+" >plus</option>
                <option value="-">minus</option>
                <option value="*">multiply</option>
                <option value="/">share</option>
            </select>
            <label>Second operand:</label>
            <input type="text" name="number2"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
        <br>
        <div>
            <h3 >Result:</h3>
            <p><?php echo $num1.$calculation.$num2."=".$Ketqua?></p>
        </div>
    </form>
</div>
</body>
</html>