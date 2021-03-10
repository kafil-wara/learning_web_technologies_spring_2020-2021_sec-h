<?php
    if(isset($_POST['gender']) ) 
    {    
        $gender = $_POST['gender'];
        
            echo "$gender";


    }

    
?>
 <html>
<head> 
    <title>Gender</title>
</head>
<body>
    <fieldset>
        <legend><b>GENDER</b></legend>
        <form method='POST' action='#'>
            <input type='radio' name='gender' value='Male'>Male
            <input type='radio' name='gender' value='Female'>Female
            <input type='radio' name='gender' value='Others'>Others
    
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>