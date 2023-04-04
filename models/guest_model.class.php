<?php
/*
 * Author: Summer Sexton
 * Date: 04/03/2023
 * Name: guest.class.php
 * Description: This class communicates with the database for the guestboook.
 */

class GuestModel
{
    //database variable, and connection
    private $db;
    private $dbConnection;

    public function __construct(){
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    public function getGuests(){
        $sql = "SELECT * FROM guests";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // if the query failed, return false.
        if (!$query)
            return false;

        //if the query succeeded, but no movie was found.
        if ($query->num_rows == 0)
            return 0;

        //handle the result
        //create an array to store all returned guests
        $guests = array();

        //loop through all rows in the returned record sets
        while ($obj = $query->fetch_object()) {
            $guest = new Guest(stripslashes($obj->first_name), stripslashes($obj->last_name), stripslashes($obj->birth_date), stripslashes($obj->email));

            //set the id for the movie
            $guest->setId($obj->id);

            //add the movie into the array
            $guests[] = $guest;
        }
        return $guests;
    }

    public function addGuest(){
        if(!filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'birth_date') ||
            !filter_has_var(INPUT_POST, 'email') ){
            return false;
        }


        //retrieve data for the new movie; data are sanitized and escaped for security.
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $birth_date = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'birth_date', FILTER_SANITIZE_STRING));
        $email = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));

        //query string for addition
        $sql = "INSERT INTO guests (last_name, first_name, birth_date, email)
VALUES ('$last_name','$first_name','$birth_date','$email')";

        //execute the query
        return $this->dbConnection->query($sql);
    }


}