<?php

    $toggleVal = $_POST["toggle"] ?? "OFF";

    if ($toggleVal == "OPEN") {
        echo shell_exec("python app.py \"OPEN\" ");
        $_SESSION["door-state"] = "OPEN";
    }
    else if($toggleVal == "OFF") {
        echo shell_exec("python app.py \"CLOSE\" ");
        $_SESSION["door-state"] = "OFF";
    }

    echo $_SESSION["door-state"];
?>

<script>
    window.history.back();
</script>