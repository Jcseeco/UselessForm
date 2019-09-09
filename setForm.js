var custome_form;
var rating = ["非常不滿意", "不滿意", "普通", "滿意", "非常滿意"];
var word = "";

function createNameInput(q){
  var name = document.createElement("div");
  var question = document.createElement("h2");
  var text = document.createElement("input");

  text.setAttribute("class", "w3-input w3-round w3-margin-bottom droptarget");
  text.setAttribute("name", "ans[]");
  question.innerHTML = q;
  name.setAttribute("class", "w3-container formContainer w3-margin w3-round-large");

  name.appendChild(question);
  name.appendChild(text);
  custome_form.appendChild(name);
}

function createPhoneInput(q){
  var phone = document.createElement("div");
  var number = document.createElement("input");
  var question = document.createElement("h2");
  var text = document.createElement("h3");

  number.setAttribute("class", "w3-input w3-round-xxlarge");
  number.setAttribute("type", "number");
  number.setAttribute("onKeyDown", "return false");
  number.setAttribute("min", "0");
  number.setAttribute("max", "99999999");
  number.setAttribute("onchange", "leadingZero(this)");
  number.setAttribute("value", "49999999");
  number.setAttribute("name", "ans[]");
  number.style = "width: 150px";
  question.innerHTML = q;
  text.setAttribute("id", "phoneText");
  text.innerHTML = "0949999999";
  phone.setAttribute("class", "w3-container formContainer w3-margin w3-round-large");

  phone.appendChild(question);
  phone.appendChild(number);
  phone.appendChild(text);
  custome_form.appendChild(phone);
}

function createEmailInput(q){
  var email = document.createElement("div");
  var question = document.createElement("h2");
  var text = document.createElement("input");

  text.setAttribute("class", "w3-input w3-round w3-margin-bottom droptarget");
  text.setAttribute("type", "email");
  text.setAttribute("onKeyDown", "return keyDown(event)");
  text.setAttribute("id", "textArea");
  text.setAttribute("name", "ans[]");
  question.innerHTML = q;
  email.setAttribute("class", "w3-container formContainer w3-margin w3-round-large");

  email.appendChild(question);
  email.appendChild(text);
  custome_form.appendChild(email);
}

function createSimpleInput(q){
  var simple = document.createElement("div");
  var question = document.createElement("h2");
  var text = document.createElement("input");

  text.setAttribute("onKeyDown", "return keyDown(event)");
  text.setAttribute("id", "textArea");
  text.setAttribute("class", "w3-input w3-round w3-margin-bottom droptarget");
  text.setAttribute("name", "ans[]");
  question.innerHTML = q;
  simple.setAttribute("class", "w3-container formContainer w3-margin w3-round-large");

  simple.appendChild(question);
  simple.appendChild(text);
  custome_form.appendChild(simple);
}

function createRateInput(q){
  var rate = document.createElement("div");
  var question = document.createElement("h2");
  var diceRoll = document.createElement("div");
  var textDiv = document.createElement("div");
  var rateText = document.createElement("h3");
  var btnDiv = document.createElement("div");
  var rollBtn = document.createElement("button");
  var hid = $("<input>");

  rollBtn.setAttribute("class", "w3-button w3-brown w3-round-xxlarge");
  rollBtn.setAttribute("type", "button");
  rollBtn.innerHTML = "roll";
  rollBtn.setAttribute("onclick", "rollRate(this)");
  btnDiv.setAttribute("class", "w3-container w3-cell");
  rateText.innerHTML = rating[0];
  rateText.setAttribute("align", "center");
  textDiv.setAttribute("class", "w3-container w3-cell");
  textDiv.style = "width:200px";
  diceRoll.setAttribute("class", "w3-container w3-row");
  question.innerHTML = q;
  rate.setAttribute("class", "w3-container formContainer w3-margin w3-round-large");
  hid.attr("type", "hidden");
  hid.attr("name", "ans[]");
  hid.attr("value", rateText.innerHTML);

  textDiv.appendChild(rateText);
  btnDiv.appendChild(rollBtn);
  diceRoll.appendChild(textDiv);
  diceRoll.appendChild(btnDiv);
  rate.appendChild(question);
  rate.appendChild(diceRoll);
  rate.appendChild(hid.get(0));
  custome_form.appendChild(rate);
}

function createSubmit(){
  var submit = document.createElement("div");
  var btn = document.createElement("button");

  btn.setAttribute("type", "submit");
  btn.setAttribute("class", "w3-button w3-round-xxlarge submitBtn ");
  btn.style.position = "relative";
  btn.innerHTML = "submit";
  btn.setAttribute("onmouseover", "changeLocation(this)");
  submit.setAttribute("class", "w3-container w3-center");
  submit.style = "height: 200px;";

  submit.appendChild(btn);
  custome_form.appendChild(submit);
}

//add leading zero to phone number
function leadingZero(input){
  var text = "09";
  if(input.value.length != 8){
    for(var i = 0; i < (8-input.value.length); i++){
      text += "0";
    }
  }
  text += input.value;
  document.getElementById("phoneText").innerHTML = text;

}

//give random rating
function rollRate(e){
  var rand = Math.floor(Math.random()*5);
  e.parentElement.previousSibling.firstChild.innerHTML = rating[rand];
  e.parentNode.parentNode.nextSibling.value = rating[rand];
}

function keyDown(e){
  for(var i = 0; i <= 9; i++){
    if(e.key == i){
      return true;
    }
  }
  if(e.key != "Backspace" && e.key != " "){
    return false;
  }
}

//hide keyboard
function hideKey(){
  var keyboard = document.getElementById("keyboard");
  keyboard.style.display = "none";
  var showKey = document.getElementById("showKey");
  showKey.style.display = "block";
}

//show keyboard
function showKey(){
  var keyboard = document.getElementById("keyboard");
  keyboard.style.display = "block";
  var showKey = document.getElementById("showKey");
  showKey.style.display = "none";
}

function changeLocation(e){
  if($("#cheat").val() != "magicJack"){
    var randY = Math.floor(Math.random()*150);
    var randX = Math.floor(Math.random()*500);
    e.style.top = randY + "px";
    e.style.left = randX + "px";
  }
}

function changeCase(){
  var keys = document.getElementById("keyboard").getElementsByTagName("span");
  if(keys[0].innerHTML == keys[0].innerHTML.toUpperCase()){
    for(var i = 0; i < 26; i++){
      keys[i].innerHTML = keys[i].innerHTML.toLowerCase();
    }
  }
  else{
    for(var i = 0; i < 26; i++){
      keys[i].innerHTML = keys[i].innerHTML.toUpperCase();
    }
  }

}

function setForm(info){
  var title = info.title;
  $('#title').html(title);
  var types = info.orders.split(" ");
  var questions = info.questions.split("`");
  document.body.style.backgroundColor = info.color;

  for(var i = 0; i < types.length -1; i ++){
    switch(types[i]){
      case "name":
        createNameInput(questions[i]);
        break;
      case "phone":
        createPhoneInput(questions[i]);
        break;
      case "email":
        createEmailInput(questions[i]);
        break;
      case "simple":
        createSimpleInput(questions[i]);
        break;
      case "rating":
        createRateInput(questions[i]);
        break;
    }
  }
  createSubmit();
}

function load(){
  custome_form = document.getElementById("custome_form");

  //allow objects to drop in div
  document.addEventListener("dragover", function(event) {
    event.preventDefault();
  });

  //get the value of the dragged element
  document.addEventListener("dragstart", function(event) {
    word = event.target.innerHTML;
  });

  //put the value of the dragged element in textArea
  //reset word variable
  document.addEventListener("drop", function(event) {
    event.preventDefault();
    if(event.target.id == "textArea"){
      event.target.value += word;
    }
    word = "";
  });

  var formId = $("input[name = 'formId']").val();
  $.ajax({
    url: 'php/getForm.php',
    type: 'POST',
    dataType: 'json',
    data:{"formId": formId},
    success:
      function(result){
        setForm(result);
      },
    error:
  		function(jqXHR, textStatus, errorThrown){
  			console.log( errorThrown);
  		}
  });

}

window.addEventListener("load", load, false);
