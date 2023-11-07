<?php require('partials/head.php') ?>
    <?php require('partials/nav.php') ?>
    <div class="sign-in-container">
   <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Sign In</button>
        </form>
</div>

    <?php require('partials/footer.php') ?>