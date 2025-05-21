<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class DbTest extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            $db->query('SELECT 1');
            return 'Database connection successful!';
        } catch (\Throwable $e) {
            return 'Database connection failed: ' . $e->getMessage();
        }
    }
}