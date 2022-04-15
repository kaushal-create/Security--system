<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>on_off</title>
    <link rel="stylesheet" href="open.css" />
    <script src="jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <form action="runPy.php" method="post" class="on-off-form">
      <input
        type="checkbox"
        id="toggle"
        name="toggle"
        value= <?php echo $_SESSION["door-state"] ?? "OFF"; ?> 
        class="send"
        />
        <label for="toggle" class="toy-toggle">
          <span class="border1"></span>
          <span class="border2"></span>
          <span class="border3"></span>
        <span class="handle">
          <span class="handle-off"></span>
          <span class="handle-on"></span>
        </span>
      </label>
    </form>
    
  

    <script>

      const onOffForm = document.querySelector(".on-off-form");
      // onOffForm.addEventListener("submit",function();
      // });

      const toggle = document.querySelector("#toggle");
      toggle.addEventListener("change",function(){
        const toggleVal = toggle.value;
        if (toggleVal == "OFF") {
          toggle.value = "OPEN";
          console.log("OPEN");
        } else {
          toggle.value = "OFF";
          console.log("OFF");
        }

        onOffForm.submit();
      });
      
    </script>
  </body>
</html>
