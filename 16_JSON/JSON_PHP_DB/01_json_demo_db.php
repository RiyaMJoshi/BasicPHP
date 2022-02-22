<?php
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $obj = json_decode($_GET["x"], false);
}
else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $obj = json_decode($_POST["x"], false);
}

$conn = new mysqli("localhost", "root", "root@Mysql1", "rinotes");
$stmt = $conn->prepare("SELECT `title` FROM notes LIMIT ?");
$stmt->bind_param("s", $obj->limit);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>