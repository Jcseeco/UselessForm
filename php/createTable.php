<?php

function createTable($conn, $uniqId){
  $tableId = "form" . $uniqId;
  $sql = "CREATE TABLE " . $tableId . " (submitID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY)";
  mysqli_query($conn, $sql);
  return $tableId;
}

function alterTable($conn, $tableId, $qCount){
  $col = "q" . $qCount;
  $sql = "ALTER TABLE " . $tableId . " ADD `" . $col . "` TEXT;";

  mysqli_query($conn, $sql);
}
 ?>
