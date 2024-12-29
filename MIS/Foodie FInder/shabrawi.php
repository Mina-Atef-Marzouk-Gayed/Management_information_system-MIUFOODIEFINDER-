<?php include('./includes/header.php'); ?>

<section class="ftco-section">
    <h1 style="text-align: center;">Shabrawi Menu</h1>
    <br>
    <!-- Filter section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <select id="categoryFilter" class="form-control" style="width: 200px; margin: 0 auto; background-color: black; color: white; border: 1px solid white;">
                    <option value="all">All</option>
                    <option value="sandwiches">Sandwiches</option>
                    <option value="crepes">Crepes</option>
                    <option value="drinks">Drinks</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row" id="menuItems">

            <!-- Sandwiches Section -->
            <div class="col-md-6 menu-item sandwiches">
                <h3 class="mb-5 heading-pricing ftco-animate">Sandwiches</h3>
                <!-- Batas Sandwich -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/batas_sandwich.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Batas Sandwich</span></h3>
                            <span class="price">EGP50.00</span>
                        </div>
                        <div class="d-block">
                            <p>Traditional Egyptian sandwich with fresh Batas bread.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Chicken Sandwich -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/chicken_sandwich.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chicken Sandwich</span></h3>
                            <span class="price">EGP110.49</span>
                        </div>
                        <div class="d-block">
                            <p>Grilled chicken with vegetables wrapped in soft pita bread.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Fool Sandwich -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/fool_sandwich.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Fool Sandwich</span></h3>
                            <span class="price">EGP15.49</span>
                        </div>
                        <div class="d-block">
                            <p>Traditional Egyptian sandwich made with fava beans.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Batngan (Eggplant) Sandwich -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/eggplant_sandwich.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Batngan (Eggplant) Sandwich</span></h3>
                            <span class="price">EGP15.79</span>
                        </div>
                        <div class="d-block">
                            <p>A savory sandwich made with grilled eggplant and spices.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- T3mya (Falafel) Sandwich -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/falafel_sandwich.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>T3mya (Falafel) Sandwich</span></h3>
                            <span class="price">EGP15.99</span>
                        </div>
                        <div class="d-block">
                            <p>Delicious falafel made from chickpeas served in a pita.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Crepes Section -->
            <div class="col-md-6 menu-item crepes">
                <h3 class="mb-5 heading-pricing ftco-animate">Crepes</h3>
                <!-- Batas Crepe -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/batas_crepe.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Batas Crepe</span></h3>
                            <span class="price">EGP40.49</span>
                        </div>
                        <div class="d-block">
                            <p>A crepe made with fresh Batas bread, filled with savory ingredients.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Chicken Crepe -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/chicken_crepe.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Chicken Crepe</span></h3>
                            <span class="price">EGP90.99</span>
                        </div>
                        <div class="d-block">
                            <p>Delicious crepe filled with seasoned grilled chicken.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Drinks Section -->
            <div class="col-md-6 menu-item drinks">
                <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
                <!-- Beyti Juice -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/beyti_juice.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Beyti Juice</span></h3>
                            <span class="price">EGP15.00</span>
                        </div>
                        <div class="d-block">
                            <p>Refreshing Beyti juice, a perfect blend of fruits.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Orange Juice -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/orange_juice.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Orange Juice</span></h3>
                            <span class="price">EGP15.00</span>
                        </div>
                        <div class="d-block">
                            <p>Freshly squeezed orange juice.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Banana Juice -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/banana_juice.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Banana Juice</span></h3>
                            <span class="price">EGP15.00</span>
                        </div>
                        <div class="d-block">
                            <p>Delicious banana juice, perfect for a refreshing treat.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Cocktail Juice -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/cocktail_juice.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Cocktail Juice</span></h3>
                            <span class="price">EGP15.00</span>
                        </div>
                        <div class="d-block">
                            <p>Mixed fruit cocktail juice with a tropical taste.</p>
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
