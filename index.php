<?php

/*
 * Author: Summer Sexton
 * Date: 04/03/2023
 * Name: index.php
 * Description: This is the home file of the site. It is where the user will access everything.
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of GuestController
$guest_controller = new GuestController();

//add your code below this line to complete this file

// set default action value
$action = 'home';
// checking if action could be retrieved and then setting it's current value
if ((isset($_GET['action'])) && !(empty($_GET['action']))) {
    $action = $_GET['action'];
}
// calling appropriate function as per action
if ($action == 'home') {
    $guest_controller->index();}
else if ($action == 'list') {
    $guest_controller->show();}
else if ($action == 'add') {
    $guest_controller->sign();}
else {
    $message = 'Invalid action requested.';
    $guest_controller->error($message);}