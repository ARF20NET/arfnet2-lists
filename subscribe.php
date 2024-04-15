<?php

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
                    <span class="help-block"><?php echo $email_err; ?></span><br>                    
                    <input name="mailinglist" type="hidden" value="<?php echo $list."@".$domain; ?>">
                    <input name="job" type="hidden" value="subscribe">
                    <input name="redirect_failure" type="hidden" value="/error.html"> 
                    <input name="redirect_success" type="hidden" value="/">
                    <br><input type="submit" value="Subscribe">
                </form>

                <h2>Unsubscription</h2>
                <form action="mlmmj.php" method="post">
                    <label>Email</label><br>
                    <input type="email" name="email">
                    <span class="help-block"><?php echo $email_err; ?></span><br>                    
                    <input name="mailinglist" type="hidden" value="<?php echo $list."@".$domain; ?>">
                    <input name="job" type="hidden" value="unsubscribe">
                    <input name="redirect_failure" type="hidden" value="/error.html"> 
                    <input name="redirect_success" type="hidden" value="/">
                    <br><input type="submit" value="Subscribe">
                </form>
            </div>
        </main>
    </body>
</html>
