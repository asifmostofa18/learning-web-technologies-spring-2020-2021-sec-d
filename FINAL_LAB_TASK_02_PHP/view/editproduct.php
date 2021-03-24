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
    <div name='editproductform'>
        <fieldset>
            <legend>
                <b>EDIT PRODUCT</b>
            </legend>
            <form action='../controller/validateedit.php?pid=<?php echo $_GET['pid']; ?>' method='POST'>
                <label>Name</label>
                <br>
                <input type='text' name='pname' value='<?php echo $productData['pname']; ?>'/>
                <br>
                <label>Buying Price</label>
                <br>
                <input type='number' name='bprice' value='<?php echo $productData['bprice']; ?>'/>
                <br>
                <label>Selling Price</label>
                <br>
                <input type='number' name='sprice' value='<?php echo $productData['sprice']; ?>'/>
                <hr>
                <input type="checkbox" name='display'/>
                <label>Display</label>
                <hr>
                <input type='submit' value="SAVE"/>
            </form>
        </fieldset>
    </div>
</body>
</html>