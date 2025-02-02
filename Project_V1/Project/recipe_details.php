<?php include 'includes/header.php'; ?>

<div class="banner">
    <h1>Recipe Details</h1>
</div>

<section>
    <h2>Spaghetti Carbonara</h2>
    <p>A creamy Italian pasta dish with pancetta and eggs.</p>
    <h3>Ingredients:</h3>
    <ul>
        <li>200g Spaghetti</li>
        <li>100g Pancetta</li>
        <li>2 Large Eggs</li>
        <li>50g Parmesan Cheese</li>
    </ul>
    <h3>Steps:</h3>
    <ol>
        <li>Boil the spaghetti in salted water.</li>
        <li>Cook pancetta in a pan until crispy.</li>
        <li>Mix eggs and cheese, and combine with the pasta and pancetta.</li>
    </ol>

    <form>
        <label for="comment">Write a Comment:</label>
        <textarea id="comment" name="comment" rows="4" placeholder="Your thoughts..."></textarea>

        <label for="rating">Rating:</label>
        <select id="rating" name="rating">
            <option value="1">1 - Poor</option>
            <option value="2">2 - Fair</option>
            <option value="3">3 - Good</option>
            <option value="4">4 - Very Good</option>
            <option value="5">5 - Excellent</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
