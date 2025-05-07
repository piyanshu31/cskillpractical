<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count</title>
</head>
<body>
    <h1>Total count </h1>
    <div class="container">
        <?php
        $file = "count.txt";

        if (!file_exists($file)) {
            file_put_contents($file,0);
        }

        $count = (int)file_get_contents($file);

        $count++;

        file_put_contents($file,$count);

        echo"<h2>Total Visitor: $count</h2>";

        ?>
    </div>
</body>
</html>