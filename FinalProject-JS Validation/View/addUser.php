<?php
    session_start();
    if ($_SESSION['type'] != 'admin')
        header('location: home.php');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <script type="text/javascript" src="../model/functions.js"></script>
<!--     <link rel="stylesheet" type="text/css" href="../css/fieldset.css">
 --></head>
<body>
    <a href='admin_home.php'>Back</a>
    <fieldset>
        <h2 align="center">Add New User</h2>
        <!-- <legend>Add User</legend> -->
        <form name="addUser" onsubmit="validateAddUser()" method="POST">
                <table align="center"> 
                    <tr>
                        <td>
                            Name :
                        </td>
                        <td>
                            <input type="text" name='name' id="name">
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name='username' id="username">
                        </td>
                    </tr>
                                       
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="Password" name='password' id="password">
                        </td>
                    </tr>


                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="Email" name='email' id="email">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>User Type</b>
                                </legend>
                                <input type='radio' name='userType'value='buyer' id="type">Buyer
                                <input type='radio' name='userType'value='seller' id="type">Seller
                            </fieldset>
                        </td>
                    </tr>

                    

                    <tr align="center">
                        <td colspan="2">
                            <input type='submit' name="addUser" value='Add!'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>

                  
    </form>
    </fieldset>

    <?php
        include('../controller/showAllUsers.php');
    ?>
    
</body>
</html>