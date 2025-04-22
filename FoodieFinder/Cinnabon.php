<?php include('./includes/header.php'); ?>

<section class="ftco-section">
    <h1 style="text-align: center;">Our Menu</h1>
    <br>
    <!-- Filter section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <select id="categoryFilter" class="form-control" style="width: 200px; margin: 0 auto; background-color: black; color: white; border: 1px solid white;">
                    <option value="all">All</option>
                    <option value="food">Food</option>
                    <option value="drinks">Drinks</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row" id="menuItems">

            <!-- Food Section -->
            <div class="col-md-6 menu-item food">
                <h3 class="mb-5 heading-pricing ftco-animate">Food</h3>
                <!-- Cinnabon Classic Roll -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/cinnabon.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Cinnabon Classic Roll</span></h3>
                            <span class="price">EGP4.99</span>
                        </div>
                        <div class="d-block">
                            <p>A warm and gooey cinnamon roll topped with our signature cream cheese frosting.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Chocobon -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/chocobon.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chocobon</span></h3>
                            <span class="price">EGP5.99</span>
                        </div>
                        <div class="d-block">
                            <p>A chocolatey twist on the classic Cinnabon roll, drizzled with chocolate frosting.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Caramel Pecanbon Roll -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/caramel_pecanbon.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Caramel Pecanbon Roll</span></h3>
                            <span class="price">EGP6.99</span>
                        </div>
                        <div class="d-block">
                            <p>A rich caramel and pecan topping on a warm cinnamon roll.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Choco Pecanbon -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/choco_pecanbon.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Choco Pecanbon</span></h3>
                            <span class="price">EGP6.49</span>
                        </div>
                        <div class="d-block">
                            <p>Decadent chocolate and pecans on a soft cinnamon roll.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Caramel Roll -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/caramel_roll.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Caramel Roll</span></h3>
                            <span class="price">EGP5.49</span>
                        </div>
                        <div class="d-block">
                            <p>A delicious caramelized cinnamon roll with a rich, sweet sauce.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Minibon Classic -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/minibon_classic.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Minibon Classic</span></h3>
                            <span class="price">EGP3.99</span>
                        </div>
                        <div class="d-block">
                            <p>The smaller version of our classic roll, with all the delicious flavor.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Mini Chocobon -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/mini_chocobon.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Mini Chocobon</span></h3>
                            <span class="price">EGP4.49</span>
                        </div>
                        <div class="d-block">
                            <p>Miniature version of the Chocobon, perfect for a smaller treat.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Drinks Section -->
            <div class="col-md-6 menu-item drinks">
                <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
                <!-- Chillattas (Small) -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/chillattas_oreo.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chillattas (OREO)</span></h3>
                            <span class="price">EGP3.99</span>
                        </div>
                        <div class="d-block">
                            <p>A creamy Oreo-flavored ice drink, perfect for hot days.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Makara Cinnamon Latte -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/makara_cinnamon_latte.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Makara Cinnamon Latte</span></h3>
                            <span class="price">EGP4.49</span>
                        </div>
                        <div class="d-block">
                            <p>A warm, comforting cinnamon latte with a rich flavor.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Ice Chocolate -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/ice_chocolate.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Ice Chocolate</span></h3>
                            <span class="price">EGP3.99</span>
                        </div>
                        <div class="d-block">
                            <p>A cold and refreshing ice chocolate drink, perfect for any time.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('./includes/footer.php'); ?>

<script>
    // JavaScript for filtering the items
    document.getElementById('categoryFilter').addEventListener('change', function() {
        var selectedCategory = this.value;
        var items = document.querySelectorAll('.menu-item');

        items.forEach(function(item) {
            if (selectedCategory === 'all') {
                item.style.display = 'block'; // Show all items
            } else if (item.classList.contains(selectedCategory)) {
                item.style.display = 'block'; // Show only selected category
            } else {
                item.style.display = 'none'; // Hide other categories
            }
        });
    });
</script>
