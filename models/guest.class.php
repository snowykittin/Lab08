<?php
/*
 * Author: Summer Sexton
 * Date: 04/03/2023
 * Name: guest.class.php
 * Description: This class establishes a basic guest.
 */

class Guest
{
    private $id, $first_name, $last_name, $birth_date, $email;

    public function __construct($first_name, $last_name, $birth_date, $email){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getBirthDate()
    {
        return $this->birth_date;
    }

    public function setBirthDate($birth_date)
    {
        $this->birth_date = $birth_date;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getID(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

}