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
        echo "<table>";
        echo "<tr><td>Error:</td><td>$errorMessage</td></tr>";
        echo "</table>";
    }
}