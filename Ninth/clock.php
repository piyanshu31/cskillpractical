<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Timet</title>
</head>
<body>
    <h2>Server Time Clock</h2>
    <div id="clock">
        <?php
        date_default_timezone_set("Asia/Kolkata");
        echo "Time: ".date("H:i:s")."<br>Date: ".date("d-m-Y");
        ?>
    </div>

        <script>
            function updateClock() {
                var xhr = new XMLHttpRequest();
                xhr.open("GET","server_tim.php",true);
                xhr.onreadystatechange = function(){
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("clock").innerHTML = xhr.responseText;
                    }
                };
                xhr.send();

            }
        </script>
    </div>
</body>
</html>