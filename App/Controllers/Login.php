<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

/**
 * Login controller
 * 
 * PHP version 7.4
 */

 class Login extends \Core\Controller {
    /**
     * Show the login page
     * 
     * @return void
     */
    public function newAction() {
        View::renderTemplate('Login/new.html');
    }

    /**
     * Log in a user
     * 
     * @return void
     */
    public function createAction() {
        $user = User::authenticate($_POST['email'], $_POST['password']);

        if ($user) {

            $this->redirect('/');
             
        } else {
            View::renderTemplate('Login/new.html', ['email' => $_POST['email'], ]);
        }
    }
 }