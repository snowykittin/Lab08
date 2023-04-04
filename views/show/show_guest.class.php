<?php

/*
 * Author: Joseph Floreancig
 * Date: 04/02/2023
 * Name: show_guest.class.php
 * Description: This class interacts between the Model and Views for the guestbook, and lists all users.
 */

class ShowGuest {

    public function display($guests) {
        ?>
        <table>
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birth Date</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($guests as $guest): ?>
                <tr>
                    <td><?php echo $guest->getFirstName(); ?></td>
                    <td><?php echo $guest->getLastName(); ?></td>
                    <td><?php echo $guest->getBirthDate(); ?></td>
                    <td><?php echo $guest->getEmail(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <p><a href="index.php">Back to Home</a></p>
        <?php
    }

}
