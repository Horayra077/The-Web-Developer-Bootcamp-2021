<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        echo "Form successfully created";
        $same_name = $_POST['samename'];
        $address1 = $_POST['address1'];
        $language = $_POST['language'];
        $javascript = $_POST['javascript'];
    
        echo $same_name;
        echo "<br>";
        echo $address1;
        echo "<br>";
        echo $language;
        echo "<br>";
        echo $language;
        echo "<br>";
    }
    
    ?>
</body>
</html>

