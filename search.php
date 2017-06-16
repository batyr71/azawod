<?php
include 'crud.php';
$object = new Crud();
if (isset($_POST[datasearch]))
{
    $search = $_POST[datasearch];
    
//    echo $search[0], $search[1], $search[2], $search[3], $search[4];

    if ($search[0] != "" || $search[1] == TRUE || $search[2] == TRUE || $search[3] > 0 || $search[4] > 0){
        echo $object->get_data_in_table("SELECT * FROM staff WHERE firstname OR lastname OR middlename LIKE '%$search[0]%' UNION SELECT * FROM staff WHERE sex LIKE '%Муж%' UNION SELECT * FROM staff WHERE sex LIKE '%Жен%' UNION SELECT * FROM staff WHERE birthday < DATE_SUB(CURDATE(),INTERVAL $search[3] YEAR) UNION SELECT * FROM staff WHERE birthday > DATE_SUB(CURDATE(),INTERVAL $search[4] YEAR)");
    }
} 


