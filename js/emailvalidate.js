function validateE(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateEmail() {
  var email = $("#exampleInputEmail1").val();
  var d = document.getElementById("EmailGroup");
  if (validateE(email)) {
  	d.className = d.className + " has-success";
  } else {
    d.className = d.className + " has-error";
  }
  alert("testing!");
});

$("#exampleInputEmail1").keyup( function() {
var searchQuery = $("#txt_Search").val();
  var email = $("#exampleInputEmail1").val();
  var d = document.getElementById("EmailGroup");
  if (validateEmail(email)) {
  	d.className = d.className + "form-group has-success";
  } else {
    d.className = d.className + "form-group has-error";
  }
  alert("test");
   
});

jQuery('#exampleInputEmail1').on('input propertychange paste', function() {
    var email = $("#exampleInputEmail1").val();
  var d = document.getElementById("EmailGroup");
  if (validateEmail(email)) {
  	d.className = d.className + "form-group has-success";
  } else {
    d.className = d.className + "form-group has-error";
  }
  alert("test");
});

function testing() {
	alert("testing");
}

var test = document.getElementById("testbutton");

function whatClicked(evt) {
    alert(evt.target.id);
}

test.addEventListener("click", whatClicked, false);