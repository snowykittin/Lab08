<?php
/*
 * Author: Joseph Floreancig
 * Date: 04/02/2023
 * Name: sign_guest.class.php
 * Description: This view confirms the user submit a guestbook response.
 */
class SignGuest {

    public function display() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Guestbook</title>
            <link rel="stylesheet" href="www/css/styles.css">
        </head>
        <body>
        <p>Thank you for signing the guestbook!</p>
        <p><a href="index.php?action=list">View All Guests</a></p>
        </body>
        </html>
        <?php
    }

}
