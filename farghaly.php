<?php include('./includes/header.php'); ?>

<section class="ftco-section">
    <h1 style="text-align: center;">Farghaly Menu</h1>
    <br>
    <!-- Filter section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <select id="categoryFilter" class="form-control" style="width: 200px; margin: 0 auto; background-color: black; color: white; border: 1px solid white;">
                    <option value="all">All</option>
                    <option value="smoothies">Smoothies</option>
                    <option value="coffees">Coffees</option>
                    <option value="salads">Fruit Salads</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row" id="menuItems">

            <!-- Smoothies Section -->
            <div class="col-md-6 menu-item smoothies">
                <h3 class="mb-5 heading-pricing ftco-animate">Smoothies</h3>
                <!-- Oreo Smoothie -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/oreo_smoothie.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Oreo Smoothie</span></h3>
                            <span class="price">EGP 35.00</span>
                        </div>
                        <div class="d-block">
                            <p>A delicious blend of Oreo cookies and creamy ice cream.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Todo Smoothie -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/todo_smoothie.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Todo Smoothie</span></h3>
                            <span class="price">EGP40.0</span>
                        </div>
                        <div class="d-block">
                            <p>Sweet and creamy smoothie with Todo biscuits.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Hohos Smoothie -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/hohos_smoothie.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Hohos Smoothie</span></h3>
                            <span class="price">EGP50.00</span>
                        </div>
                        <div class="d-block">
                            <p>A rich and creamy smoothie made with Hohos snack cakes.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Fresh Strawberry Smoothie -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/fresh_strawberry_smoothie.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Fresh Strawberry Smoothie</span></h3>
                            <span class="price">EGP40.00</span>
                        </div>
                        <div class="d-block">
                            <p>Fresh and fruity strawberry smoothie with a creamy texture.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Fresh Watermelon Smoothie -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/fresh_watermelon_smoothie.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Fresh Watermelon Smoothie</span></h3>
                            <span class="price">EGP45.79</span>
                        </div>
                        <div class="d-block">
                            <p>A refreshing and hydrating watermelon smoothie.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Coffees Section -->
            <div class="col-md-6 menu-item coffees">
                <h3 class="mb-5 heading-pricing ftco-animate">Coffees</h3>
                <!-- Mocha -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/mocha.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Mocha</span></h3>
                            <span class="price">EGP35.99</span>
                        </div>
                        <div class="d-block">
                            <p>A rich and creamy mocha coffee with chocolate flavor.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Double Espresso -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/double_espresso.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Double Espresso</span></h3>
                            <span class="price">EGP25.00</span>
                        </div>
                        <div class="d-block">
                            <p>A strong and intense double shot of espresso.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Nescafe -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/nescafe.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Nescafe</span></h3>
                            <span class="price">EGP30.49</span>
                        </div>
                        <div class="d-block">
                            <p>A classic and smooth Nescafe coffee.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Cappuccino -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/cappuccino.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Cappuccino</span></h3>
                            <span class="price">EGP40.49</span>
                        </div>
                        <div class="d-block">
                            <p>A creamy cappuccino with a rich foam layer.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Fruit Salads Section -->
            <div class="col-md-6 menu-item salads">
                <h3 class="mb-5 heading-pricing ftco-animate">Fruit Salads</h3>
                <!-- Mango Slices -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/mango_slices.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Mango Slices</span></h3>
                            <span class="price">EGP35.49</span>
                        </div>
                        <div class="d-block">
                            <p>Fresh and juicy mango slices, perfect for a light snack.</p>
                        </div>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
                <!-- Pomegranate -->
                <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/pomegranate.jpg);"></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Pomegranate</span></h3>
                            <span class="price">EGP35.00</span>
                        </div>
                        <div class="d-block">
                            <p>Fresh pomegranate seeds bursting with flavor.</p>
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
