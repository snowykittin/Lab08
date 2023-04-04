<?php

class GuestError
{
    public function display($errorMessage) {
        echo "<table>";
        echo "<tr><td>Error:</td><td>$errorMessage</td></tr>";
        echo "</table>";
    }
}