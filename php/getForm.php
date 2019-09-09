<?php
include 'dbConnect.php';
$conn = connect();

$formId = $_POST['formId'];

$sql = "SELECT `title`, `orders`, `questions`, `color`
        FROM forms
        WHERE formId = '" . $formId . "'";

$result = mysqli_query($conn, $sql);
$r=mysqli_fetch_assoc($result);

echo json_encode($r, JSON_UNESCAPED_UNICODE);
mysqli_free_result($result);
mysqli_close($conn);
 ?>
