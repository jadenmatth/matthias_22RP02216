<?php
session_start();
require 'db.php';
// require 'navbar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rememberMe = isset($_POST['remember_me']);

    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];

        // Set a cookie if "Remember Me" is checked
        if ($rememberMe) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie expires in 30 days
            setcookie('password', $password, time() + (86400 * 30), "/"); // Note: Storing plaintext passwords in cookies is not secure
        } else {
            // Clear cookies if not remembering the user
            setcookie('username', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }

        header('Location: index.php');
        exit();
    } else {
        $error = 'Invalid credentials';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.2/css/bulma.min.css"> <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
</head>
<body>

<div class="container" style="margin-top:120px">
    <div class="columns is-centered">
        <div class="column is-one-third">
            <h2 class="title has-text-centered">Login</h2>
            <form method="POST">
                <div class="field">
                    <label class="label" for="username">Username</label>
                    <div class="control">
                        <input class="input" type="text" id="username" name="username" placeholder="Username" value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="password">Password</label>
                    <div class="control">
                        <input class="input" type="password" id="password" name="password" placeholder="Password" value="<?php echo isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : ''; ?>" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember_me" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary is-fullwidth" type="submit">Login</button>
                    </div>
                </div>
                <?php if (isset($error)): ?>
                    <div class="notification is-danger"><?php echo $error; ?></div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

</body>
</html>
