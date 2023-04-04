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
        <p>Thank you for signing the guestbook!</p>
        <p><a href="index.php?action=list">View All Guests</a></p>
        <?php
    }

}
