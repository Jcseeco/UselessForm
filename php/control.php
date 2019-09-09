<?php
if(isset($_POST["submit"])){
  include 'dbConnect.php';
  include 'createTable.php';
  $conn = connect();

  $uniqId = uniqid();
  $tableId = createTable($conn, $uniqId);
  $title = $formOrders = $formQ = $pass = "";

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  if(empty($title)){
    $title = "我的表單";
  }

  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  if(empty($pass)){
    $pass = "1234";
  }
  //hashing password
  $hashedPsw = password_hash($pass, PASSWORD_DEFAULT);

  if(isset($_POST['order'])){
    $order = $_POST['order'];
    $question = $_POST['question'];
    for($i = 0; $i < count($order); $i++){
      //save the type of th questions in customed order
      $formOrders .= $order[$i] . " ";
      //check if the question is blanked, then save it in customed order
      $question[$i] = validateQ($order[$i], $question[$i]);
      $formQ .= $question[$i] . "`";
      //create a table for submitted answers of the custom form
      alterTable($conn, $tableId, $i);
    }

    $color = $_POST['color'];

    insertNewForm($conn, $uniqId, $hashedPsw, $title, $formOrders, $formQ, $color);
    header("Location: ../customForm.php?id=" . $uniqId);
    exit;
  }

}

function insertNewForm($conn, $id, $pass, $title, $formOrders, $formQ, $color){
  $sql = "INSERT INTO forms
  VALUES ('" . $id . "', '" . $pass . "', '" . $title . "', '" . $formOrders . "', '" . $formQ . "', '" . $color . "')";

  mysqli_query($conn, $sql);
  return $sql;
}

function validateQ($type, $q){
  $question = "";

  if($q != ""){
    $question = $q;
  }
  else{
    switch($type){
      case "name":
        $question = "請輸入名字";
        break;
      case "phone":
        $question = "請輸入手機號碼";
        break;
      case "email":
        $question = "請輸入email";
        break;
      case "simple":
        $question = "請輸入簡答";
        break;
      case "rating":
        $question = "請給予評分";
        break;
    }
  }

  return $question;
}
 ?>
