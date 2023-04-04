<?php

/*
 * Author: Joseph Floreancig
 * Date: 04/02/2023
 * Name: index.class.php
 * Description: This class creates the index view for the guestbook.
 */

class Index {

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
        <h1>Welcome to the Guestbook</h1>
        <h2>Please sign!</h2>
        <table>
        <form method="post" action="index.php?action=add" novalidate>
            <tr>
                <td><label for="first_name">First Name:</label></td>
                <td><input type="text" id="first_name" name="first_name" required></td>
            </tr>
            <tr>
                <td><label for="last_name">Last Name:</label></td>
                <td> <input type="text" id="last_name" name="last_name" required></td>
            </tr>
            <tr>
                <td><label for="birth_date">Birth Date:</label>
                    </td>
                <td><input type="date" id="birth_date" name="birth_date" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>

        </form>
        </table>

        <p><a href="index.php?action=list">View All Guests</a></p>
        </body>
        </html>
        <?php
    }

}
