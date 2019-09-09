<?php

session_start();

if(isset($_POST["submit"])){

  include "dbConnect.php";
  $conn = connect();

  $fid = mysqli_real_escape_string($conn, $_POST["id"]);
  $fPsw = mysqli_real_escape_string($conn, $_POST["password"]);

  //error handle
  if(empty($fid) || empty($fPsw)){
    header("Location: ../index.php?login=empty");
    exit();
  }
  else{
    $sql = "SELECT formId, password, title, questions FROM forms WHERE formId = '$fid'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) < 1){
      header("Location: ../index.php?login=error");
      exit();
    }
    else{
      if($row = mysqli_fetch_assoc($result)){
        //dehashing password
        $pswCheck = password_verify($fPsw, $row['password']);
        if($pswCheck == false){
          header("Location: ../index.php?login=error");
          exit();
        }
        elseif($pswCheck == true){
          $_SESSION["fid"] = $row["formId"];
          $_SESSION["fTitle"] = $row["title"];
          $_SESSION["fQ"] = $row["questions"];
          header("Location: ../formResults.php?show=submits");
          exit();
        }
      }
    }
  }
}
else{
  header("Location: ../formResults.php?login=noSubmit");
  exit();
}

 ?>
