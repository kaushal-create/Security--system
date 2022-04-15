var btn = document.querySelector("#login_btn");
var input = document.querySelector("#input_pass");
btn.addEventListener("click", login);
var reset_btn = document.querySelector("#new_pass");
reset_btn.addEventListener("click", reset_pass);

var password;

function login(e) {
  e.preventDefault();
  var pass = input.value;

  if (pass == "1234") {
    console.log("passed");
    location.replace("./open_close.php");
  } else if (pass == "") {
    alert("Password should be filled");
  } else {
    console.log("Wrong password");
    location.replace("./wrong.php");
  }
}

function reset_pass(e) {
  e.preventDefault();
  location.replace("./reset.php");
}
