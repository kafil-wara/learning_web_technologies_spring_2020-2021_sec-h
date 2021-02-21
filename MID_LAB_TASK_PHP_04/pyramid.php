<?php
    $numbers = array("1","2","3","4","5");
    $alphabet = array("A", "B","C","D","E","F");

    echo "Shape 1:";
    for($i = 0; $i<5; $i++)
    {   
        echo "<br/>";
        for($j = 0; $j < $i+1; $j++)
        {
            echo "*";
          
        }
        echo "<br/>";
    }

    echo "Shape 2:";
    for($i = count($numbers); $i>=0; $i--)
    {   
        echo "<br/>";
        for($j = 0; $j < $i; $j++)
        {
            echo $numbers[$j];
            
        }
        echo "<br/>";
    }

    
?>