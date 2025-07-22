<?php include 'header.php'; ?>

<div class="login-container">
    <form action="index.php" method="POST" class="login-form">
        <h2>Student Login</h2>

        <?php
        if (isset($_SESSION['success_msg'])) {
            echo '<p class="success-msg">' . htmlspecialchars($_SESSION['success_msg']) . '</p>';
            unset($_SESSION['success_msg']);
        }
        ?>

        <?php if (isset($error)) : ?>
            <p class="error-msg"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="login">Log In</button>
    </form>
</div>

<?php include 'footer.php'; ?>
