<?php

namespace App\Controller;

use App\Controller\AppController;

class DashboardController extends AppController {

    public function index() {
        
    }
    
    public function isAuthorized($user) {
        if (isset($user['role'])) {
            return true;
        }
        // Default deny
        return false;
    }

}
