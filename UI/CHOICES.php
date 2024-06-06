<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* CSS Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #333;
            padding-top: 20px;
            box-sizing: border-box;
            color: white;
        }

        .sidebar h2 {
            margin-top: 0;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
            text-align: center;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .menu-bar {
            background-color: #444;
            color: white;
            padding: 10px;
            box-sizing: border-box;
            width: 100%;
            position: fixed;
            top: 0;
            left: 200px; /* Width of the sidebar */
            z-index: 1; /* Ensure the menu bar is above the sidebar */
        }

        .menu-bar h1 {
            margin: 0;
            padding-left: 20px;
        }

        .content {
            margin-left: 200px; /* Width of the sidebar */
            padding: 20px;
            box-sizing: border-box;
            color: #333; /* Text color for the content */
            margin-top: 50px; /* Height of the menu bar */
        }

        .content h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <?php
    // Dynamic PHP Content goes here if needed
    ?>

    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#business">Business Permit</a></li>
            <li><a href="#healthcare">Health Care Center</a></li>
            <li><a href="#senior">Senior Citizen</a></li>
            <li><a href="#barangay">Barangay Clearance</a></li>
            <li><a href="#mapping">Resident Mapping</a></li>
        </ul>
    </div>
    <div class="menu-bar">
        <h1>Dashboard</h1>
    </div>
    <div class="content">
        <section id="business">
            <h2>Business Permit Section</h2>
            <!-- Business Permit Content -->
        </section>
        <section id="healthcare">
            <h2>Health Care Center Section</h2>
            <!-- Health Care Center Content -->
        </section>
        <section id="senior">
            <h2>Senior Citizen Section</h2>
            <!-- Senior Citizen Content -->
        </section>
        <section id="barangay">
            <h2>Barangay Clearance Section</h2>
            <!-- Barangay Clearance Content -->
        </section>
        <section id="mapping">
            <h2>Resident Mapping Section</h2>
            <!-- Resident Mapping Content -->
        </section>
    </div>
</body>
</html>
