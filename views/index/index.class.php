<?php

class Index {

    public function display() {
        ?>
        <form method="post" action="index.php?action=add" novalidate>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="birthdate">Birth Date:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Submit</button>
        </form>

        <p><a href="index.php?action=list">View All Guests</a></p>
        <?php
    }

}
