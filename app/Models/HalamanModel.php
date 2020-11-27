<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class HalamanModel extends Model {
        protected $table = 'halaman';

        protected $allowedFields = ['judulhalaman', 'author', 'tglposting', 'isihalaman'];
    }
?>