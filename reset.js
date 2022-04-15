// var new_pass = document.querySelector("#new_pass").value;
// var old_pass = document.querySelector("#old_pass").value;
// var reset_btn = document.querySelector("#login_btn");
// reset_btn.addEventListener("click", reset_pass);

// var previous_pass;
// function reset_pass() {
//   var fs = require("fs");

//   fs.readFile("password.txt", function (err, data) {
//     if (err) {
//       return console.error(err);
//     }
//     previous_pass = data.toString();
//     console.log("Data read : " + previous_pass);
//   });

//   if (previous_pass == old_pass) {
//     fs.writeFile("password.txt", new_pass);
//   } else {
//     alert("!! Password mismatched !!");
//   }
// }
