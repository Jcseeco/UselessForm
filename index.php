<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="index.js"></script>
  </head>
  <body>
    <?php
      if(isset($_GET['login']) && $_GET['login'] == "empty"){
        echo "<script type='text/javascript'>alert('id 或 密碼 空白!!')</script>";
      }
      elseif(isset($_GET['login']) && $_GET['login'] == "error"){
        echo "<script type='text/javascript'>alert('id 或 密碼 錯誤!!')</script>";
      }
     ?>
    <div class="w3-conainer bigContainer">
      <h1 class="title">麻煩の問卷</h1>
      <div class="subTitle">
        <h1>表單結果查詢</h1>
      </div>
      <form class="signin_form" action="php/login.php" method="post">
        <div class="signin w3-container w3-round-large w3-padding w3-center">
          <div class="signId w3-container w3-margin-bottom">
            <i class="fas fa-fingerprint"></i>
            <input type="text" class="w3-input" name="id" placeholder="輸入id">
          </div>
          <div class="signPass w3-container w3-margin-bottom">
            <i class="fas fa-key"></i>
            <input type="password" class="w3-input" name="password" placeholder="輸入密碼">
          </div>
          <button type="submit" name="submit" class="w3-button w3-round-xlarge w3-brown">查詢</button>
        </div>
      </form>

      <button type="button" class="toSearchBtn w3-white w3-button w3-round-xxlarge innactive" onclick="togglePage()">
      <i class="fas fa-arrow-left" style="display: flex;"></i></button>

      <button type="button" class="toCustomBtn w3-white w3-button w3-round-xxlarge" onclick="togglePage()">
      <i class="fas fa-arrow-right" style="display: flex;"><p id="btnTxt">建立表單</p></i></button>

      <div class="subTitle innactive">
        <h1>建立表單</h1>
      </div>
      <form class="custom_form" action="php/control.php" method="post">
        <div class="custom_contain w3-container w3-center innactive">
          <div class="custom w3-container w3-round-large w3-padding w3-center" ondragover="over(event)" ondrop="drop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)">
            <div class="formTitle">
              <h4>表單標題</h4>
              <input type="text" class="w3-input" name="title" placeholder="標題">
            </div>
            <div class="formPass">
              <h4>請設定密碼</h4>
              <input id="psw" type="password" name="password" placeholder="密碼">
              <span><i id="eye" class="fas fa-eye" onclick="showPsw()"></i></span>
            </div>
            <div class="colorChooser">
              <h4>選擇表單顏色</h4>
              <input type="color" name="color" value="#331a00" onchange="changeBack(this)">
            </div>
            <h4>請選擇要新增的問題</h4>
          </div>

          <div class="dropdown" id="dButton">
            <button type="button" class="w3-btn w3-pale-red w3-round-xxlarge dropdown-toggle w3-margin-top" data-toggle="dropdown">+</button>
            <ul class="dropdown-menu">
              <li><button type="button" class="w3-button" style="width: 100%" onclick="createSimple('name')">姓名</button></li>
              <li><button type="button" class="w3-button" style="width: 100%" onclick="createSimple('phone')">電話</button></li>
              <li><button type="button" class="w3-button" style="width: 100%" onclick="createSimple('email')">email</button></li>
              <li><button type="button" class="w3-button" style="width: 100%" onclick="createSimple('simple')">簡答</button></li>
              <li><button type="button" class="w3-button" style="width: 100%" onclick="createSimple('rating')">評分</button></li>
            </ul>
          </div>

          <button type="submit" name="submit" class="w3-button w3-round-xlarge w3-brown w3-margin-top w3-margin-bottom" id="createForm">建立</button>
        </div>
      </form>

    </div>

  </body>
</html>
