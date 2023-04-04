<?php

require_once('models/guest_repository.class.php');
require_once('views/index/index.class.php');
require_once('views/show/show_guest.class.php');
require_once('views/sign/sign_guest.class.php');
require_once('views/error/error.class.php');

class GuestController
{

    private $guestRepository;

    public function __construct()
    {
        $this->guestRepository = new GuestRepository();
    }

    public function index()
    {
        $indexView = new Index();
        $indexView->display();
    }

    public function show()
    {
        $guests = $this->guestRepository->getAllGuests();
        $showGuestView = new ShowGuest();
        $showGuestView->display($guests);
    }

    public function sign()
    {
        $name = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];

        $guest = new Guest($name, $birthdate, $email);
        $this->guestRepository->addGuest($guest);

        $signGuestView = new SignGuest();
        $signGuestView->display();
    }

    public function error()
    {
        $errorView = new Error();
        $errorView->display();
    }

}
