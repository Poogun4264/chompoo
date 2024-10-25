<?php
include 'db.php';

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE tb_chompoo SET full_name='$full_name', email='$email', phone='$phone', address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>