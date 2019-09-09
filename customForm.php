<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="form.css">
    <script type="text/javascript" src="setForm.js"></script>
  </head>
  <body class="w3-main">
  <form class="w3-container" id="custome_form" action="php/processAns.php" method="post">
    <h1 id="title" class="w3-center" style="color:#f1e6da; font-weight: bolder;"></h1>
    <input type="hidden" name="formId" value=<?php echo "\"" . $_GET['id'] . "\"" ?>>
    <input id="cheat" type="hidden" value="true">
    </form>
    <div class="keyboard w3-animate-left w3-container w3-center" id="keyboard" style="display: none;">
      <span draggable="true">a</span>
      <span draggable="true">b</span>
      <span draggable="true">c</span>
      <span draggable="true">d</span>
      <span draggable="true">e</span>
      <span draggable="true">f</span>
      <span draggable="true">g</span>
      <span draggable="true">h</span>
      <span draggable="true">i</span>
      <span draggable="true">j</span>
      <span draggable="true">k</span>
      <span draggable="true">l</span>
      <span draggable="true">m</span>
      <span draggable="true">n</span>
      <span draggable="true">o</span>
      <span draggable="true">p</span>
      <span draggable="true">q</span>
      <span draggable="true">r</span>
      <span draggable="true">s</span>
      <span draggable="true">t</span>
      <span draggable="true">u</span>
      <span draggable="true">v</span>
      <span draggable="true">w</span>
      <span draggable="true">x</span>
      <span draggable="true">y</span>
      <span draggable="true">z</span>
      <span draggable="true">.</span><br>
      <span><i class="fas fa-arrow-up" onclick="changeCase()"></i></span>
      <span draggable="true">?</span>
      <span draggable="true">!</span>
      <span draggable="true">@</span>
      <span draggable="true">-</span>
      <span draggable="true">~</span>
      <span><i class="fas fa-keyboard" onclick="hideKey()"></i></span>
    </div>
    <div>
      <i class="fas fa-keyboard" id="showKey" onclick="showKey()"></i>
    </div>
  </body>
<html>
