<?php

require 'CaptchasDotNet.php';

$captchas = new CaptchasDotNet ('arf20', '7QOD8AEp5n9ib5bp',
                                '/tmp/captchasnet-random-strings','3600',
                                'abcdefghkmnopqrstuvwxyz','6',
                                '240','80','000088');

if (!isset($_GET["list"]) || empty($_GET["list"])) {
    die("List required");
}

$list = $_GET["list"];

$domain = "arf20.com"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ARFNET Lists</title>
        <link rel="stylesheet" type="text/css" href="/style.css">
    </head>
    <body>
        <header><a href="https://arf20.com/">
            <img src="arfnet_logo.png" width="64"><span class="title"><strong>ARFNET</strong></span>
        </a></header>
        <hr>
        <main>
            <h2><a href="/">Back</a></h2>
            <div class="wrapper">
                <h1><?php echo $list; ?></h1>

                <h2>Subscription</h2>
                <form action="mlmmj.php" method="post">
                    <label>Email</label><br>
                    <input type="email" name="email">
                    <input name="mailinglist" type="hidden" value="<?php echo $list."@".$domain; ?>">
                    <input name="job" type="hidden" value="subscribe">
                    <input name="redirect_failure" type="hidden" value="/error.html"> 
                    <input name="redirect_success" type="hidden" value="/">
                    <input type="hidden" name="random" value="<?= $captchas->random () ?>" />
                    <input name="captcha" size="6" />
                    <br><input type="submit" value="Subscribe">
                </form>

                <h2>Unsubscription</h2>
                <form action="mlmmj.php" method="post">
                    <label>Email</label><br>
                    <input type="email" name="email"><br>
                    <input name="mailinglist" type="hidden" value="<?php echo $list."@".$domain; ?>">
                    <input name="job" type="hidden" value="unsubscribe">
                    <input name="redirect_failure" type="hidden" value="/error.html"> 
                    <input name="redirect_success" type="hidden" value="/">
                    <input type="hidden" name="random" value="<?= $captchas->random () ?>" />
                    <label>Captcha</label><br>
                    <input name="captcha" size="6" /><br>
                    <br><input type="submit" value="Subscribe">
                </form>
                <?= $captchas->image () ?> <a href="javascript:captchas_image_reload('captchas.net')">Reload Image</a>

                <hr>
                <h2>E-mail based subscription</h2>
                <ul>
                    <li>To subscribe to <?php echo $list; ?>, send a message to <?php echo $list; ?>+subscribe@arf20.com</li>
                    <li>To unsubscribe, send a message to <?php echo $list; ?>+unsubscribe@arf20.com</li>
                </ul>
            </div>
        </main>
    </body>
</html>

