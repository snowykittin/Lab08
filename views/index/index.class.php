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
        <form method="post" action="index.php?action=add" novalidate>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Submit</button>
        </form>

        <p><a href="index.php?action=list">View All Guests</a></p>
        <?php
    }

}
