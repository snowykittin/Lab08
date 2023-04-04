<?php

/*
 * Author: Joseph Floreancig
 * Date: 04/02/2023
 * Name: guest_controller.class.php
 * Description: This class interacts between the Model and Views for the guestbook.
 */

require_once('models/guest_model.class.php');
require_once('views/index/index.class.php');
require_once('views/show/show_guest.class.php');
require_once('views/sign/sign_guest.class.php');
require_once('views/error/guest_error.class.php');

class GuestController
{

    private $guest_model;

    public function __construct()
    {
        $this->guest_model = new GuestModel;
    }

    public function index()
    {
        $indexView = new Index();
        $indexView->display();
    }

    public function show()
    {
        $guests = $this->guest_model->getGuests();
        $showGuestView = new ShowGuest();
        $showGuestView->display($guests);
    }

    public function sign()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $birth_date = $_POST['birth_date'];
        $email = $_POST['email'];

        $guest = new Guest($last_name, $first_name, $birth_date, $email);
        $this->guest_model->addGuest($guest);

        $signGuestView = new SignGuest();
        $signGuestView->display();
    }

    public function error()
    {
        $errorView = new Error();
        $errorView->display();
    }

}
