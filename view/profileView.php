<?php include 'header.php'; ?>

<div class="profile-container">
    <div class="profile-card">
        <div class="profile-image">
            <img src="../assets/images/profile-placeholder.png" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <h2><?php echo htmlspecialchars($profile['name']); ?></h2>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($profile['username']); ?></p>
            <p><strong>Bio:</strong> <?php echo nl2br(htmlspecialchars($profile['bio'])); ?></p>
            <p><strong>Hobbies:</strong> <?php echo htmlspecialchars($profile['hobbies']); ?></p>
            <p><strong>Courses:</strong> <?php echo htmlspecialchars($profile['courses']); ?></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
