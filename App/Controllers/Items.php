<?php

namespace App\Controllers;

use \Core\View;

/**
 * Items controller (example)
 * 
 * PHP version 7.4
 */
class Items extends Authenticated {

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