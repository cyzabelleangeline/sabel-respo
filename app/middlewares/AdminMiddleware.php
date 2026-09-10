<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminMiddleware
{
    public function handle($next)
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (empty($_SESSION['authenticated']) || ($_SESSION['role'] ?? '') !== 'admin') {
            $_SESSION['login_error'] = 'Only admin users can manage products.';
            redirect('products');
            exit();
        }

        return $next();
    }
}
