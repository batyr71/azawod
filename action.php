<?php
include 'crud.php';
$object = new Crud();
if (isset($_POST["action"]))
{
    if($_POST["action"]  == "Load")
    {
        echo $object->get_data_in_table("SELECT * FROM staff ORDER BY id DESC");
    }
    if($_POST["action"] == "Insert")
    {
        $firstname = mysqli_real_escape_string($object->connect, $_POST["firstname"]);
        $lastname = mysqli_real_escape_string($object->connect, $_POST["lastname"]);
        $middlename = mysqli_real_escape_string($object->connect, $_POST["middlename"]);
        $birthdate = mysqli_real_escape_string($object->connect, $_POST["birthdate"]);
        $sex = mysqli_real_escape_string($object->connect, $_POST["sex"]);
        $image = $object->upload_file($_FILES["image"]);
        $query = "INSERT INTO staff (firstname,  lastname, middlename, birthday, sex, image) VALUES ('".$firstname."', '".$lastname."', '".$middlename."', '".$birthdate."', '".$sex."', '".$image."' ) ";
        $object->execute_query($query);
    }
    
    if (isset($_POST[datasearch]))
    {
    $search = $_POST[datasearch];
    
//    echo $search[0], $search[1], $search[2], $search[3], $search[4];

    if ($search[0] != "" || $search[1] == TRUE || $search[2] == TRUE || $search[3] > 0 || $search[4] > 0){
        echo $object->get_data_in_table("SELECT * FROM staff WHERE firstname OR lastname OR middlename LIKE '%$search[0]%' UNION SELECT * FROM staff WHERE sex LIKE '%Муж%' UNION SELECT * FROM staff WHERE sex LIKE '%Жен%' UNION SELECT * FROM staff WHERE birthday < DATE_SUB(CURDATE(),INTERVAL $search[3] YEAR) UNION SELECT * FROM staff WHERE birthday > DATE_SUB(CURDATE(),INTERVAL $search[4] YEAR)");
    }
    
    
    }
    
    if(isset($_POST[id]))
    {
        alert ($_POST[id]);
    }
}
