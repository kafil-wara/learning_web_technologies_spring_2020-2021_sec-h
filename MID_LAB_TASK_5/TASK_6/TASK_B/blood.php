<?php
    if(isset($_POST['blood']))
    {
        if($_POST['blood'] != "null")
        
            echo "Blood Group: ".$_POST['blood'];
        
        else
        
            echo "Please select an option";

        $_POST = array();
        
    }
?>

<html>
<head> 
    <title>Blood Group</title>
</head>
<body>
    <fieldset>
        <legend><b>BLOOD GROUP</b></legend>
        <form method='POST' action=''>
            <select name='blood'>

                <option value='null'>Choose an option</option>

                <option value="AB+">AB+</option>

                <option value="B+">B+</option>
                 
                <option value="A+">A+</option>
                
                <option value="O+">O+</option>
               
            </select>
            <br>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>