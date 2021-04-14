<?php
    session_start();
    if ($_SESSION['type'] != 'admin')
        header('location: home.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="../css/fieldset.css">
</head>
<body>
    <a href='admin_home.php'>Back</a>
    <fieldset>
        <!-- <legend>Add Product</legend> -->
        <form action="../controller/addProduct.php" method="POST">
                        <table align="center"> 
                    <tr>
                        <td>
                            Name :
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>Price:</td>
                        <td>
                            <input type="number" name='price'>
                        </td>
                    </tr>
                                       
                    <tr>
                        <td>Stock:</td>
                        <td>
                            <input type="number" name='stock'>
                        </td>
                    </tr>

                    

                    <tr>
                        <td colspan="2" align="center">
                            <input type='submit' name="addProduct" value='Add!'>
                            <input type='reset' value='Reset'><br><br>
                        </td>
                    </tr>

                  
        </form>
    </fieldset>


<?php
    include('../controller/showAllProducts.php');
?>
    
</body>
</html>