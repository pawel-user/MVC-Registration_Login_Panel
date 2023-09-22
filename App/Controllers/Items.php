<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;

/**
 * Items controller (example)
 * 
 * PHP version 7.4
 */
class Items extends \Core\Controller {
    /**
     * Require the user to be authenticated vefore giving access to all methods in the controller
     * 
     * @return void
     */
    protected function before() {
        $this->requireLogin();
    }

    /**
     * Items index
     * 
     * @return void
     */
    public function indexAction() {
        View::renderTemplate('Items/index.html');
    }

    /**
     * Add a new item
     * 
     * @return void
     */
    public function newAction() {
        echo "new action";
    }

    /**
     * Show an item
     */
    public function showAction() {
        echo "show action";
    }
}