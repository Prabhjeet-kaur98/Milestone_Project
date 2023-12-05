<?php 
<?php require('partials/head.php') ?>
    <?php require('partials/nav.php') ?>
    <h2>Signup</h2>
    <form action="signup_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Signup</button>
    </form>
</div>

    <?php require('partials/footer.php') ?>