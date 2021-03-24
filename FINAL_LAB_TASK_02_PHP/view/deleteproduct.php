<?php
    include('../model/data.php');
    if(empty($_GET['pid']))
    {
        echo "Not a valid product";
        return;
    }
    else
    {
        $productData = getDataById($_GET['pid']);
        $productData = mysqli_fetch_assoc($productData);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>DELETE PRODUCT</b>
        </legend>
            <label>Name: <?php echo $productData['pname']; ?></label><br>
            <label>Buying Price: <?php echo $productData['bprice']; ?></label><br>
            <label>Selling Price: <?php echo $productData['sprice']; ?></label><br>
            <label>Displayable: 
                <?php 
                if($productData['display'] == 'y')
                {
                    echo 'Yes';
                }
                else
                    echo 'No'; 
                ?>
            </label><br>
        <form action='../controller/validatedelete.php?pid=<?php echo $productData['pid']; ?>' method='POST'?>
            <input type="submit" value='Delete'>
        </form>
    </fieldset>
</body>
</html>