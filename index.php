<?php

// Get lists
$lists = scandir("/var/spool/mlmmj/");
$lists = array_diff($lists, array(".", ".."));

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <title>ARFNET Lists</title>
    </head>
    <body>
        <header><a href="https://arf20.com/">
            <img src="arfnet_logo.png" width="64"><span class="title"><strong>ARFNET</strong></span>
        </a></header>
        <hr>
        <main>
            <div class="row">
                <div class="col8">
                    <h2 class="center">ARFNET Mailing Lists</h2>
                    <ul>
                    <?php
                        foreach ($lists as $list) {
                            echo "<li>".$list." <a href=\"subscribe.php?list=".$list."\">subscribe</a> <a href=\"/archive/".$list."\">archive</a></li>\n";
                        }
                    ?>
                    </ul>
                    <hr>
                    <h2>Subscription</h2>
                    <ul>
                        <li>To subscribe to a list, send a message to list+subscribe@arf20.com or go to https://lists.arf20.com/subscribe.php?list=list</li>
                        <li>To unsubscribe, send a message to list+unsubscribe@arf20.com or go to https://lists.arf20.com/subscribe.php?list=list</li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>
