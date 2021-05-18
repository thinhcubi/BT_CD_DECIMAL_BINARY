

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Decimal to Binary converter</h2>
<form method="post">
<table>
    <tr>
        <td>Decimal</td>
        <td><input type="text" name="decimal" </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="Change" </td>
    </tr>
    <tr>
        <td>Result:</td>
    </tr>


</table>
</form>
<?php
include_once "Stack.php";

$stk = new Stack();

if($_SERVER["REQUEST_METHOD"]="POST"){
    $decimal = $_POST["decimal"];
    $stk->push($decimal);
    $result = $_POST["result"];
    foreach ($stk->stack as $item){
        echo   $item;
    }

}?>

</body>
</html>
