<?php
if(isset($_SESSION['fid'])){
  include "php/dbConnect.php";
  $conn = connect();

  $sql = "SELECT * FROM form" . $_SESSION['fid'] ."";
  $result = mysqli_query($conn, $sql);

  //deciding which method is to show the user
  if(isset($_GET['show']) && $_GET['show'] == "submits"){
    sortBySubmit($result);
  }
  elseif(isset($_GET['show']) && $_GET['show'] == "questions"){
    sortByQs($result);
  }
}

function sortBySubmit($result){
  $qs = explode("`", $_SESSION['fQ']);

  if(mysqli_num_rows($result) > 0){
    //for every submit, show the questions and their answers
    while ($row = mysqli_fetch_assoc($result)) {
      $resultHtml = "<div class='w3-container w3-center w3-white w3-round-large w3-margin resultBox'>";
      $resultHtml .= "<a id=".$row['submitID']."></a>";
      $resultHtml .= "<h2 class='submitId'>" . $row['submitID'] . "</h2>";
      for($i = 0; $i < count($qs)-1; $i++){
        $resultHtml .= "<h3 class='w3-light-grey'>" . $qs[$i] . "</h3>";
        $resultHtml .= "<h4>" . $row['q' . $i] . "</h4>";
        $resultHtml .= "<div class='w3-border-bottom w3-border-grey'></div>";
      }
      $resultHtml .= "</div>";
      echo $resultHtml;
    }
  }
}

function sortByQs($result){
  $qs = explode("`", $_SESSION['fQ']);
  $return_arr = array();

  if(mysqli_num_rows($result) > 0){
    //fetch result
    while ($row = mysqli_fetch_assoc($result)) {
      $row_array = $row;
      array_push($return_arr,$row_array);
    }
    //for every question, print out all answers
    for($i = 0; $i < count($qs)-1; $i++){
      $resultHtml = "<div class='w3-container w3-center w3-white w3-round-large w3-margin resultBox'>";
      $resultHtml .= "<div class='w3-container w3-light-grey'>";
      $resultHtml .= "<a id=".($i+1)."></a>";
      $resultHtml .= "<h3>" . $qs[$i] . "</h3></div>";
      $resultHtml .= "<div class='w3-border-bottom w3-border-grey'></div>";
      for($j = 0; $j < count($return_arr); $j++){
        $resultHtml .= "<h4>" . $return_arr[$j]['q' . $i] . "</h4>";
      }
      $resultHtml .= "</div>";
      echo $resultHtml;
    }
  }

}
 ?>
