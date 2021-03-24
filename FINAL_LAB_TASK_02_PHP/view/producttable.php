<?php
    include('../model/data.php');
    $result = getData();
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
    <div name='producttable'>
        <fieldset>
            <legend>
                <b>DISPLAY</b>
            </legend>
            <table border="1">
                <tr>
                    <th>
                        <b>NAME</b>
                    </th>
                    <th>
                        <b>PROFIT</b>
                    </th>
                    <th>

                    </th>
                    <th>

                    </th>
                </tr>
                <?php
                //$result = mysqli_fetch_assoc($result);
                while ($row = mysqli_fetch_assoc($result)){
                    if($row['display'] == 'y')
                    {
                        echo
                        "<tr>   
                            <td>
                                ".$row['pname']."
                            </td>
                            <td>
                                ".(int)($row['sprice'] - $row['bprice'])."
                            </td>
                            <td>
                                <a href='./editproduct.php?pid=".$row['pid']."'>edit</a>
                            </td>
                            <td>
                                <a href='./deleteproduct.php?pid=".$row['pid']."'>delete</a>
                            </td>
                        </tr>";
                    }
                    else
                    {

                    }                    
                }
                ?>
            </table>
        </fieldset>
    </div>
    <br>
    <a href="./addproduct.html">Add Product</a>
</body>
</html>