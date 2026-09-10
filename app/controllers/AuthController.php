<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function login()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        if (!empty($_SESSION['authenticated'])) {
            redirect('products');
            return;
        }

        $this->call->view('auth/login', [
            'error' => $_SESSION['login_error'] ?? '',
        ]);
        unset($_SESSION['login_error']);
    }

    public function authenticate()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $username = trim((string) ($this->io->post('username') ?? ''));
        $password = (string) ($this->io->post('password') ?? '');

        $accounts = [
            ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin'],
            ['username' => 'user', 'password' => 'user123', 'role' => 'user'],
        ];

        $account = null;
        foreach ($accounts as $candidate) {
            if ($username === $candidate['username'] && $password === $candidate['password']) {
                $account = $candidate;
                break;
            }
        }

        if ($account === null) {
            $_SESSION['login_error'] = 'Invalid username or password.';
            redirect('login');
            return;
        }

        session_regenerate_id(true);
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $account['role'];
        redirect('products');
    }

    public function logout()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION = [];
        session_destroy();
        redirect('login');
    }
}
