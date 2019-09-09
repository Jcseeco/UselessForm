<?php
session_start();
 ?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>表單結果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="formResults.css">
  </head>
  <body>
    <!-- sidebar -->
    <nav class="w3-sidebar w3-white w3-collapse w3-center" style="z-index:3;width:200px;" id="mySidebar">
      <h2><?php echo $_SESSION['fTitle']; ?></h2>
      <div class="functionBtns">
        <form id="showMethod" action="formResults.php" method="get">
          <button id="chgShow" type="submit" name="show" value=<?php echo showChange() ?> class="w3-button w3-white func_btn" onclick="return changeShow()"><i class="fas fa-list-alt"></i>  變更顯示方式</button>
        </form>
        <button type="button" class="w3-button w3-white func_btn"><i class="fas fa-pencil-alt"></i>  編輯表單</button>
        <button type="button" class="w3-button w3-white func_btn"><i class="fas fa-trash-alt"></i>  刪除表單</button>
        <button type="button" class="w3-button w3-white func_btn"><i class="fas fa-share-square"></i>  分享結果</button>
        <div id="aTags"></div>
        <form action="php/logout.php" method="post">
          <button type="submit" name="submit" class="w3-button w3-white func_btn" onclick="return logout()"><i class="fas fa-sign-out-alt"></i>  logout</button>
        </form>
      </div>
		</nav>

    <!-- main content -->
    <div class="main">
      <?php include "getResults.php";?>
    </div>
    <script type="text/javascript">
      function createTags(){
        var submits = $(".resultBox");
        var aTags = $("#aTags");
        for(var i = 1; i <= submits.length; i++){
          var tags = $("<a>");
          tags.attr("href","#" + i);
          tags.attr("class","w3-button");
          if($("#chgShow").val() == "questions"){
            tags.html("跳到 " + i + " " + submits.eq(i-1).find("h4").eq(0).html());
          }
          else if($("#chgShow").val() == "submits"){
            tags.html("跳到 " + i + " " + submits.eq(i-1).find("h3").html());
          }
          aTags.append(tags);
        }
        console.log(submits.length);
      }
      function logout(){
        return confirm("確認登出?");
      }
      window.addEventListener("load", createTags, false);
    </script>
    <?php
      function showChange(){
        if($_GET['show'] == "submits"){
          return "questions";
        }
        elseif($_GET['show'] == "questions"){
          return "submits";
        }
      }
     ?>
  </body>
</html>
