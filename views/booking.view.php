<?php
// Include Connection and Functions Files
require($proj_root . 'partials/head.php');
require($proj_root . 'partials/nav.php');
?>

        <h2>Booking</h2>
        <form class="booking-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="destination">Destination</label>
            <select id="destination" name="destination" required>
                <option value="beach">Exotic Beach Getaway</option>
                <option value="mountain">Mountain Adventure</option>
                <option value="historical">Historical Tours</option>
            </select>
            
            <button type="submit">Book Now</button>
        </form>
    </div>
    <?php require('partials/footer.php') ?>