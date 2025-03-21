<?php
$error = '';
$success = '';

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 'account_exists':
            $error = 'Gebruikersnaam bestaat al.';
            break;
        case 'wrong_password':
            $error = 'Ongeldig wachtwoord.';
            break;
        case 'no_account':
            $error = 'Geen account gevonden.';
            break;
        case 'password_mismatch':
            $error = 'Wachtwoorden komen niet overeen.';
            break;
        case 'unknown':
            $error = 'Er is een onbekende fout opgetreden.';
            break;
    }
}

if (isset($_GET['success']) && $_GET['success'] === 'registered') {
    $success = 'Account succesvol geregistreerd. Log nu in.';
}

$activeForm = $_GET['form'] ?? 'login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registratie</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="../assets/js/login.js" defer="defer"></script>
</head>
<body>
<div class="login-container">
    <div id="login-form" class="form-container <?= $activeForm === 'login' ? 'active' : '' ?>">
        <h1>Login</h1>
        <?php if ($error && $activeForm === 'login'): ?>
            <p class="error-message"><?= htmlspecialchars($error) ?></p>
        <?php elseif ($success): ?>
            <p class="success-message"><?= htmlspecialchars($success) ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="input-group">
                <span class="icon">👤</span>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="action" value="login">Login</button>
        </form>
        <p class="register-link">
            Geen account? <a href="#" onclick="showRegisterForm()">Registreer</a>
        </p>
    </div>

    <div id="register-form" class="form-container <?= $activeForm === 'register' ? 'active' : '' ?>">
        <h1>Register</h1>
        <?php if ($error && $activeForm === 'register'): ?>
            <p class="error-message"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="input-group">
                <span class="icon">👤</span>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" name="password_confirm" placeholder="Confirm Password" required>
            </div>
            <button type="submit" name="action" value="register">Registreer</button>
        </form>
        <p class="register-link">
            Heb je al een account? <a href="#" onclick="showLoginForm()">Login</a>
        </p>
    </div>

</div>

</body>
</html>
