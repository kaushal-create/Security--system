var btn = document.querySelector("#login_btn");
btn.addEventListener("click", return_login);

function return_login(e) {
  e.preventDefault();
  location.replace("./index.php");
}
