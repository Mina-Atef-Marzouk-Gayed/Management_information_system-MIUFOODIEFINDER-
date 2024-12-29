<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinnabon Vendor Dashboard</title>
    <link rel="stylesheet" href="vendor.css">
</head>
<body>

    <div class="dashboard-container">
        <h1>Cinnabon Vendor Dashboard</h1>

        <!-- Statistics Section -->
        <div class="statistics-container">
            <h2>Sales Statistics</h2>
            <div class="statistics-item">
                <div class="stat-title">Best Food Seller</div>
                <div class="stat-content">
                    <button class="product-stat">
                        Chocobon <span class="stat-count">400 sold</span>
                    </button>
                    <img src="https://cinnabon.com.tr/wp-content/uploads/RS174_Mini-Chocobon-scr.jpg" alt="Best Seller" class="best-seller-image">

                    <button class="product-stat">
                        Caramel Pecan <span class="stat-count">500 sold</span>
                    </button>
                    <!-- Add Image for Best Seller -->
                    <img src="https://1.bp.blogspot.com/-OpQZRsWbljM/YIP_eAkmESI/AAAAAAAAAP8/_fWVKsg1eLEwJlu30zVO1MAKC7bUY-fewCLcBGAsYHQ/s1125/46129319_1149761218533896_2351513681394663424_n.jpg" alt="Best Seller" class="best-seller-image">

                </div>
            </div>
            <div class="statistics-item">
                <div class="stat-title">Best Beverages</div>
                <div class="stat-content">
                    <button class="product-stat">Latte <span class="stat-count">150 sold</span></button>
                    <img src="https://leaf.nutrisystem.com/wp-content/uploads/2019/04/cinnamon-latte.jpg" alt="Best Seller" class="best-seller-image">
                    <button class="product-stat">Hot Chocolate <span class="stat-count">150 sold</span></button>
                    <img src="data:image/jpeg;base64,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" alt="Best Seller" class="best-seller-image">

                </div>
            </div>
        </div>

        <!-- Food Inventory Section -->
        <div class="table-container">
            <h2>Food</h2>
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price (EGP)</th>
                        <th>Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Caramel Pecan Cinnabon</td>
                        <td>140</td>
                        <td><span class="count" id="food-count-1">10</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('food-count-1', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('food-count-1', 'decrease')">-</button>

                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Chocobon</td>
                        <td>110</td>
                        <td><span class="count" id="food-count-2">15</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('food-count-2', 'decrease')">-</button>

                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Classic Cinnamon Roll</td>
                        <td>85</td>
                        <td><span class="count" id="food-count-3">12</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('food-count-3', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('food-count-3', 'decrease')">-</button>

                        </td>
                    </tr>

                    <!-- More inventory items go here -->
                </tbody>
            </table>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">Add product</button>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">edit product</button>


        </div>

        <!-- Beverage Inventory Section -->
        <div class="table-container">
            <h2>Beverages</h2>
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price (EGP)</th>
                        <th>Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Coffee</td>
                        <td>70</td>
                        <td><span class="count" id="beverage-count-1">8</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('beverage-count-1', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('beverage-count-1', 'decrease')">-</button>

                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hot Chocolate</td>
                        <td>85</td>
                        <td><span class="count" id="beverage-count-2">10</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('beverage-count-2', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('beverage-count-2', 'decrease')">-</button>
                        </td>

                    </tr>
                    <!-- More inventory items go here -->
                </tbody>
            </table>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">Add product</button>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">edit product</button>
        </div>

        <!-- Toppings Inventory Section -->
        <div class="table-container">
            <h2>Toppings</h2>
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Price (EGP)</th>
                        <th>Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cinnamon Sugar</td>
                        <td>20</td>
                        <td><span class="count" id="topping-count-1">25</span></td>
                        <td>
                            <button class="count-btn" onclick="changeCount('topping-count-1', 'increase')">+</button>
                            <button class="count-btn" onclick="changeCount('topping-count-1', 'decrease')">-</button>
                        </td>

                    </tr>
                    <!-- More topping items go here -->
                </tbody>
            </table>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">Add product</button>
            <button class="count-btn" onclick="changeCount('food-count-2', 'increase')">edit product</button>
        </div>
    </div>

    <script>
        function changeCount(id, action) {
            const countElement = document.getElementById(id);
            let currentCount = parseInt(countElement.innerText);

            if (action === 'increase') {
                currentCount++;
            } else if (action === 'decrease' && currentCount > 0) {
                currentCount--;
            }

            countElement.innerText = currentCount;
        }

        function updatePrice(inputId) {
            const inputElement = document.getElementById(inputId);
            const newValue = inputElement.value;

            if (newValue) {
                alert(`Price updated to $${parseFloat(newValue).toFixed(2)}`);
            } else {
                alert("Please enter a valid price.");
            }
        }
    </script>


    </script>

</body>
</html>
