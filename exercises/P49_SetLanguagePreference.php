<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        // Write your code here
        if (isset($_GET['lang']) && in_array($_GET['lang'], $this->allowedLanguages)) {
            $_SESSION['lang'] = $_GET['lang'];
        } else {
            $_SESSION['lang'] = 'en';
        }
        echo "Language set to " . $_SESSION['lang'];
    }
}
