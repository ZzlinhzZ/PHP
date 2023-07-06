<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h1>Operator</h1>
    <form action="" method="post">
        a: <input type="number" name="txtA" value="" required/>
        b: <input type="number" name="txtB" value="" required/>
        <input type="submit" value="+" name="btnSubmit"/>
        <input type="submit" value="-" name="btnSubmit"/>
        <input type="submit" value="*" name="btnSubmit"/>
        <input type="submit" value="/" name="btnSubmit"/>
    </form>
    <?php
        function pheptinh($pt, $a, $b){
            if ($pt=="+") {
                return $a + $b;
            }else if ($pt=="-") {
                return $a-$b;
            }else if ($pt=="*") {
                return $a*$b;
            }else if ($pt=="/") {
            
                    return $a/$b; 
                
            }
        }
        if (isset($_POST['btnSubmit'])) {
            $a = $_POST['txtA'];
            $b = $_POST['txtB'];
            $pt = $_POST['btnSubmit'];
            if ($pt == '+') {
                $result = pheptinh($pt, $a, $b);
                echo  "$a $pt $b = $result";
            }
            if ($pt == '-') {
                $result = pheptinh($pt, $a, $b);
                echo  "$a $pt $b = $result";
            }if ($pt == '*') {
                $result = pheptinh($pt, $a, $b);
                echo  "$a $pt $b = $result";
            }
            if ($pt == '/') {
                if ($b!=0) {
                    $result = pheptinh($pt, $a, $b);
                    echo  "$a $pt $b = $result";
                }else{
                    echo "không thể chia cho 0";
                }  

            }
        }
    ?>
</body>
</html>