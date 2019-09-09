<?php
include "dbConnect.php";
$conn = connect();

$formId = $_POST["formId"];
$ans = $_POST["ans"];

insertAns($conn, $formId, $ans);

header("Location: ../finishPage.php?id=" . $formId);
exit;

function insertAns($conn, $formId, $ans){
  $formId = "form" . $formId;
  $sql = "INSERT INTO " . $formId;
  $cols = " ( ";
  $values = " VALUES( ";
  for($i = 0; $i < count($ans)-1; $i++){
    $cols .= "`q" . $i . "`, ";
    $values .= "'" . $ans[$i] . "', ";
  }
  $cols .= "`q" . (count($ans)-1) . "`)";
  $values .= "'" . $ans[count($ans)-1] . "')";
  $sql .= $cols . $values;

  mysqli_query($conn, $sql);
  mysqli_close($conn);
}
 ?>
