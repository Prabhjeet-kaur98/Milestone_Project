<?php require('partials/head.php') ?>
    <?php require('partials/nav.php') ?>
    div class="booking-container"> <!-- Updated class name -->
        <h2>Booking</h2>
        <form class="booking-form"> <!-- Updated class name -->
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