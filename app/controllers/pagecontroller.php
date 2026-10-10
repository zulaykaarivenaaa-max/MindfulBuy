<?php

class PageController
{
    public function landing()
    {
        include "app/views/landing.php";
    }

    public function profile()
    {
        // Cek apakah user sudah login, jika belum kembalikan ke login
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['login'])) {
            header("Location: index.php?page=login");
            exit();
        }

        include "app/views/profile.php";
    }
}