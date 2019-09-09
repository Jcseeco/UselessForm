var idIndex = 0;

function load(){
  var btn = document.getElementsByClassName("toCustomBtn")[0];
  var btnTxt = document.getElementById("btnTxt");
  btn.addEventListener("mouseover", function(){
    btnTxt.style.visibility = "visible";
    btnTxt.style.opacity = 1;
  });
  btn.addEventListener("mouseout", function(){
    btnTxt.style.visibility = "hidden";
    btnTxt.style.opacity = 0;
  });

}

function changeBack(color){
  document.body.style.backgroundColor =	color.value;
}

function togglePage(){
  var signin = document.getElementsByClassName("signin")[0];
  var custom = document.getElementsByClassName("custom_contain")[0];
  var toSearchBtn = document.getElementsByClassName("toSearchBtn")[0];
  var toCustomBtn = document.getElementsByClassName("toCustomBtn")[0];

  signin.classList.toggle("innactive");
  custom.classList.toggle("innactive");
  toSearchBtn.classList.toggle("innactive");
  toCustomBtn.classList.toggle("innactive");
  $(".subTitle").each(function() {
    this.classList.toggle("innactive");
  })

}

function createSimple(type){
  var qText = checkType(type);

  var simple = $("<div></div>");
  var question = $("<h4></h4>").text("請輸入" + qText + "問題");
  var input = $("<input>");
  var t = $("<input>");
  var del = $("<i>");
  var move = $("<i>");

  simple.attr("class", "custom w3-container w3-round-large w3-margin-top w3-padding");
  simple.attr("id", "s" + idIndex++);
  simple.attr("draggable", "true");
  simple.attr("ondragstart", "move(event)");
  simple.attr("ondragover", "over(event)");
  simple.attr("ondrop", "drop(event)");
  simple.attr("ondragleave", "dragLeave(event)");
  simple.attr("ondragenter", "dragEnter(event)");
  input.attr("class", "w3-input");
  input.attr("name", "question[]");
  input.attr("placeholder", "輸入問題..");
  t.attr("type", "hidden");
  t.attr("name", "order[]");
  t.attr("value", type);
  del.attr("class", "fas fa-times-circle deleteTab");
  del.attr("onclick", "return deleteTab(this)");
  simple.append(question);
  simple.append(input);
  simple.append(t);
  simple.append(del);
  simple.append(move);
  simple.insertBefore(document.getElementById("dButton"));
}

function checkType(type){
  var qText = "";
  switch(type){
    case "name":
      qText = "姓名";
      break;
    case "phone":
      qText = "電話";
      break;
    case "email":
      qText = "email";
      break;
    case "simple":
      qText = "簡答";
      break;
    case "rating":
      qText = "評分";
      break;
  }
  return qText;
}

function deleteTab(t){
  var confirm = window.confirm("確認要刪除此問題嗎?");
  if(confirm)
    jQuery(t.parentNode).remove();
  else
    return false;
}

function move(e){
  e.dataTransfer.setData("text", e.target.id);
}

function over(e){
  e.preventDefault();
}

function dragEnter(e){
  e.preventDefault();
  var dragIndi = $("<div>");
  dragIndi.attr("class", "w3-bottombar w3-grey w3-margin-top");
  dragIndi.attr("id", "dragIndi");
  if(e.target.classList.contains("custom")){
    dragIndi.insertAfter(jQuery(e.target));
  }
  else{
    dragIndi.insertAfter(jQuery(e.target).parent(".custom"));
  }
}

function dragLeave(e){
  var dragIndi = $("#dragIndi");
  dragIndi.remove();
}

function drop(ev){
  var tab = document.getElementById(ev.dataTransfer.getData("text"));
  if(ev.target.classList.contains("custom")){
    ev.target.parentNode.insertBefore(tab, ev.target.nextSibling);
  }
  else{
    jQuery(tab).insertAfter(jQuery(ev.target).parent(".custom"));
  }
  var dragIndi = $("#dragIndi");
  dragIndi.remove();
}

function showPsw(){
  var psw = document.getElementById("psw");
  if(psw.type === "password")
    psw.type = "text";
  else
    psw.type = "password";

  var eye = document.getElementById("eye");
  eye.classList.toggle("fa-eye");
  eye.classList.toggle("fa-eye-slash");
}

window.addEventListener("load", load, false);
