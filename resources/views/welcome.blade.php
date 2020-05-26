<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Server is Running</title>
    </head>
    <body>
        <h1>It works!</h1>
        <p><em><font size="1">This is the default web page for this server.</font></em></p>
        <p><em><font size="1">The web server software is running but no content has been added, yet.</font></em></p>
        <p><em><font size="1">This page exist to show that network connection is worked.</font></em></p>
        <br/>
        <?php
            if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
                //check for ip from share internet
                $ip = $_SERVER["HTTP_CLIENT_IP"];
            } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                // Check for the Proxy User
                $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else {
                $ip = $_SERVER["REMOTE_ADDR"];
            }
        ?>
        <p>
            <em>
                <font size="1">
                <?php
                    echo "Hostname : " . gethostname() . "<br />";
                    echo "Your IP is : " . $ip;
                ?>
                </font>
            </em>
        </p>
    </body>
</html>