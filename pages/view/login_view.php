<?php
session_start();

$db = new SQLite3('../../magnet.sqlite');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($action === 'register') {
        $passwordConfirm = trim($_POST['password_confirm']);

        if ($password !== $passwordConfirm) {
            header('Location: ../login.php?form=register&error=password_mismatch');
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);

        try {
            $stmt->execute();
            header('Location: ../login.php?success=registered');
            exit();
        } catch (Exception $e) {
            if (str_contains($e->getMessage(), 'UNIQUE')) {
                header('Location: ../login.php?form=register&error=account_exists');
                exit();
            } else {
                header('Location: ../login.php?form=register&error=unknown');
                exit();
            }
        }

    } elseif ($action === 'login') {
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $result = $stmt->execute();
        $user = $result->fetchArray(SQLITE3_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;
                header('Location: ../chat.php');
                exit();
            } else {
                header('Location: ../login.php?form=login&error=wrong_password');
                exit();
            }
        } else {
            header('Location: ../login.php?form=login&error=no_account');
            exit();
        }
    }
}

