<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class AboutModel extends Model {
        protected $table = 'about';

        protected $allowedFields = ['nama', 'foto', 'deskripsi_singkat'];
    }
?>