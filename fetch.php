<?php
include 'db.php';

$sql = "SELECT * FROM tb_chompoo";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data[0]);
?>
