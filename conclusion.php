<?php

    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if ($age == 21 && $gender == "Male")
    {
        echo "$age - $gender: Debutant.";
    }
    else if ($age == 18 && $gender == "Female")
    {
        echo "$age - $gender: Debutant.";
    }
    else
    {
        echo "$age - $gender: Not Debutant.";
    }
?>