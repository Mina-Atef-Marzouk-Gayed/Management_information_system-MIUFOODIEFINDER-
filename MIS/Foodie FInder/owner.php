
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mis.css">
    <title>Owner Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <h1>Owner Dashboard</h1>

        <!-- Navbar -->
        <nav class="navbar">
            <ul>
                <li><a href="#students" class="nav-link active" onclick="showSection('students')">Students</a></li>
                <li><a href="#vendors" class="nav-link" onclick="showSection('vendors')">Vendors</a></li>
                <li><a href="#blocked-students" class="nav-link" onclick="showSection('blocked-students')">Blocked Students</a></li>
            </ul>
        </nav>
<!-- Statistics Table -->
<div class="stats">
    <div class="stat">
        <h3>Total Students</h3>
        <span>13</span>
    </div>
    <div class="stat">
        <h3>Total Vendors</h3>
        <span>3</span>
    </div>
    <div class="stat">
        <h3>Vendor Details</h3>
        <ul class="vendor-list">
            <li>Farghaly</li>
            <li>Cinnabon</li>
            <li>Shabrawy</li>
        </ul>
    </div>
    <div class="stat">
        <h3>blocked Students</h3>
        <span>3</span>
    </div>
</div>

        <!-- Students Section -->
        <div id="students" class="section active-section">
            <h2>Students</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="student-list">
                    <!-- Students data rows go here, only the first 3 will be shown initially -->
                    <tr><td>1</td><td>Ahmed Ali</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>2</td><td>Sara Hassan</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>3</td><td>Mahmoud Ibrahim</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>4</td><td>Yasmin Fathy</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>5</td><td>Karim Nabil</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>6</td><td>Laila Amr</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>7</td><td>Omar Saad</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>8</td><td>Hana Adel</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>9</td><td>Mohamed Khaled</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>10</td><td>Salma Mostafa</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="block-btn">Block</button><button class="delete-btn">Delete</button></td></tr>
                </tbody>
            </table>
            <button class="add-btn">Add Student</button>
            <button id="show-more" class="show-more-btn" onclick="toggleShow()">Show Less</button>
        </div>

        <!-- Vendors Section -->
        <div id="vendors" class="section">
            <h2>Vendors</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Farghaly</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>2</td><td>Cinnabon</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="delete-btn">Delete</button></td></tr>
                    <tr><td>3</td><td>Shabrawy</td><td>Active</td><td><button class="edit-btn">Edit</button><button class="delete-btn">Delete</button></td></tr>
                </tbody>
            </table>
            <button class="add-btn">Add Vendor</button>
        </div>

        <!-- Blocked Students Section -->
        <div id="blocked-students" class="section">
            <h2>Blocked Students</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>11</td><td>Hussein Talaat</td><td>Blocked</td><td><button class="unblock-btn">Unblock</button></td></tr>
                    <tr><td>12</td><td>Mariam Gamal</td><td>Blocked</td><td><button class="unblock-btn">Unblock</button></td></tr>
                    <tr><td>13</td><td>Tarek Hisham</td><td>Blocked</td><td><button class="unblock-btn">Unblock</button></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleShow() {
            const rows = document.querySelectorAll("#student-list tr");
            const showMoreButton = document.getElementById("show-more");

            // Toggle between showing more or less rows
            rows.forEach((row, index) => {
                if (index > 2) {
                    row.style.display = row.style.display === "none" ? "" : "none";
                }
            });

            // Toggle button text
            if (showMoreButton.innerText === "Show Less") {
                showMoreButton.innerText = "Show More";
            } else {
                showMoreButton.innerText = "Show Less";
            }
        }

        function showSection(section) {
            const sections = document.querySelectorAll('.section');
            const links = document.querySelectorAll('.nav-link');
            
            // Hide all sections
            sections.forEach(sec => sec.classList.remove('active-section'));
            // Remove active class from all navbar links
            links.forEach(link => link.classList.remove('active'));
            
            // Show selected section
            document.getElementById(section).classList.add('active-section');
            // Add active class to clicked navbar link
            const activeLink = document.querySelector([onclick="showSection('${section}')"]);
            activeLink.classList.add('active');
        }
    </script>
</body>
</html>