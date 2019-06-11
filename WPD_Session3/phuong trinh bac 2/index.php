<?php
include "QuadraticEquation.php";
?>

<html>
<head>
    <title>Phuong trinh bac 2</title>
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
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_POST["number1"];
    $b=$_POST["number2"];
    $c=$_POST["number3"];
    $quadraticEquation= new QuadraticEquation($a,$b,$c);
    if($quadraticEquation->getDiscriminant()>0){
        echo $quadraticEquation->getRoot1()."<br>";
        echo $quadraticEquation->getRoot2();
    }else if($quadraticEquation->getDiscriminant()==0){
        echo $quadraticEquation->getRoot1();
    }else{
        echo "0";
    }
}
?>
<div id="content">
    <h1>Simple Calculator</h1>
    <form method="post">
        <div id="data">
            <label>Nhap a:</label>
            <input type="text" name="number1"/><br/>
            <label>Nhap b:</label>
            <input type="text" name="number2"/><br/>
            <label>Nhap c:</label>
            <input type="text" name="number3"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
        <br>
    </form>
</div>
</body>
</html>
