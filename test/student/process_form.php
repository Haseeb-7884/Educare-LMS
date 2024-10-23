<?php

    $selected_fruits = $_POST['fruits'];
    echo "You have selected:";
    foreach ($selected_fruits as $fruit){
        echo "<br>".$fruit;
    }

?>
