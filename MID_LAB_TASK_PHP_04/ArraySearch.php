<?php
    $countries = array('India', 'Bangladesh', 'Nepal', 'Bhutan', 'Singapore');
    $searchItem = 'Bangladesh';

    foreach($countries as $country)
    {
        if($country === $searchItem)
        {
            echo $country." is valid in the array","<br/>";
        }
    }
?>