<?php
/*
 * Author: Joseph Floreancig
 * Date: 04/02/2023
 * Name: guest_error.class.php
 * Description: This class creates an error display.
 */

class GuestError
{
    public function display($errorMessage) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Guestbook</title>
            <link rel="stylesheet" href="www/css/styles.css">
        </head>
        <body>
        <?php
        echo "<table>";
        echo "<tr><td>Error:</td><td>$errorMessage</td></tr>";
        echo "</table>";
        ?>
        </body>
        </html>
        <?php
    }
}