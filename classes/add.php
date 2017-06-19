<?php 
include 'Reestr.php';
$reestr = new Reeestr();

if(isset($_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $sex = $_POST['sex'];
    $birthday = $_POST['birthday'];
    $newname = rand().$_FILES['image']['name'];
    $filename = $_FILES['image']['tmp_name'];
    $destination = "../images/".$newname;
    $sql = "INSERT INTO staff (firstname, lastname, middlename, birthday, sex, image) VALUES ('".$firstname."', '".$lastname."', '".$middlename."', '".$birthday."', '".$sex."', '".$newname."')";
    mysqli_query($reestr->connect, $sql);
    move_uploaded_file($filename, $destination);
}

