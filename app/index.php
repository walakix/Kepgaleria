
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Képgaléria</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Képgaléria</h1>
    <?php
    $path="images";
    $files=scandir($path);
    foreach ($files as $item) {
        $parts=explode(".", $item);
        $ext=strtolower(end($parts));
        //echo "$item - $ext<br>";
        if ((is_file($path."/".$item)) && (($ext=="jpg") || ($ext=="jpeg") || ($ext=="png"))) {
            //echo "$item<br>";
            ?>
    <div class="gallery">
        <a target="_blank" href="<?php echo $path."/".$item ?>">
            <img src="<?php echo $path."/".$item ?>" alt="<?php echo $item ?>" width="150" height="100">
        </a>
        <div class="desc"><?php echo $item ?></div>
    </div>

            <?php 
        }
        
      }    
    ?>

    
</body>
</html>
