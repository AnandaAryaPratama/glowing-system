<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;

    class Dashboard extends BaseController {
        public function index() {
            $session = session();
            echo "Selamat datang ".$session->get('user_name');
        }
    }
?>