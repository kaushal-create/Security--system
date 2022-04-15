<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Door opening web page</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form class="login" method="post">
            <div class="login__field">
              <i class="login__icon fas fa-lock"></i>
              <input
                type="password"
                class="login__input"
                placeholder="Password.."
                id="input_pass"
                name="password"
              />
            </div>
            <button class="button login__submit" id="login_btn">
              <span class="button__text">OPEN DOOR</span>
              <i class="button__icon fas fa-chevron-right"></i>
            </button>

            <button class="button password_reset" id="new_pass">
              <span class="button__text">Change Password</span>
              <i class="button__icon fas fa-key"></i>
            </button>
          </form>
        </div>

        <div class="screen__background">
          <span
            class="screen__background__shape screen__background__shape4"
          ></span>
          <span
            class="screen__background__shape screen__background__shape3"
          ></span>
          <span
            class="screen__background__shape screen__background__shape2"
          ></span>
          <span
            class="screen__background__shape screen__background__shape1"
          ></span>
        </div>
      </div>
    </div>
    <script src="./jquery.js"></script>
  </body>
</html>
