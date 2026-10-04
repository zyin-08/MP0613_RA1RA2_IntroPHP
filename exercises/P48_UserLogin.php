<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        // Write your code here
        $user = $_POST['username'];
        $password = $_POST['password'];
        if ($user === 'admin' && $password === 'secret') {
            $_SESSION['loggedin'] = true;
            echo "Welcome, admin";
        } else {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
        }
    }
}
