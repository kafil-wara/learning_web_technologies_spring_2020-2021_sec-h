<?php
    if(isset($_POST['blood']))
    {
        if($_POST['blood'] != "null")
        
            echo "Blood Group: ".$_POST['blood'];
        
        else
        
            echo "Please select an option";
        
    }
?>